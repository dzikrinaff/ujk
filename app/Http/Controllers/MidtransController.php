<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemesanan;
use App\Models\Cart;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Midtrans\Config;
use Midtrans\Snap;
use Midtrans\Notification;

class MidtransController extends Controller
{
    public function __construct()
    {
        // Setup Midtrans Config
        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = config('midtrans.is_production');
        Config::$isSanitized = true;
        Config::$is3ds = true;
    }

    /**
     * Show Checkout Page
     */
    public function index()
    {
        $user = auth()->user();
        $carts = Cart::with('merchandise')
            ->where('user_id', $user->id)
            ->get();

        if ($carts->isEmpty()) {
            return redirect()->route('cart.index')->with('error', 'Keranjang belanja kosong!');
        }

        $total = $this->calculateTotal($carts);

        return view('checkout.index', [
            'carts' => $carts,
            'total' => $total,
        ]);
    }

    /**
     * Process Payment (Simpan ke Database + Redirect ke Midtrans)
     */
    public function process(Request $request)
    {
        // Validasi input
        $request->validate([
            'telpon' => 'required|string|max:20',
            'alamat' => 'required|string|max:255',
        ]);

        DB::beginTransaction();

        try {
            $user = auth()->user();
            $carts = Cart::with('merchandise')
                ->where('user_id', $user->id)
                ->get();

            // Jika keranjang kosong
            if ($carts->isEmpty()) {
                return response()->json(['error' => 'Keranjang belanja kosong!'], 400);
            }

            // Hitung total harga
            $total = $this->calculateTotal($carts);

            // Generate Order ID
            $orderId = 'ORD-' . uniqid();

            // Simpan ke database
            $pemesanan = Pemesanan::create([
                'order_id' => $orderId,
                'user_id' => $user->id,
                'telpon' => $request->telpon, // Pastikan tidak NULL
                'alamat' => $request->alamat,  // Pastikan tidak NULL
                'total_harga' => $total,
                'status' => 'pending',
            ]);

            // Siapkan data untuk Midtrans
            $params = [
                'transaction_details' => [
                    'order_id' => $orderId,
                    'gross_amount' => $total,
                ],
                'customer_details' => [
                    'first_name' => $user->name,
                    'email' => $user->email,
                    'phone' => $request->telpon,
                ],
                'item_details' => $this->prepareItemDetails($carts),
            ];

            // Dapatkan Snap Token dari Midtrans
            $snapToken = Snap::getSnapToken($params);

            // Update snap_token di database
            $pemesanan->update(['snap_token' => $snapToken]);

            // Kosongkan keranjang belanja
            Cart::where('user_id', $user->id)->delete();

            DB::commit();

            // Berikan response ke frontend
            return response()->json([
                'snap_token' => $snapToken,
                'redirect_url' => 'https://app.sandbox.midtrans.com/snap/v2/vtweb/' . $snapToken,
                'order_id' => $orderId,
            ]);

        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'error' => 'Pembayaran gagal: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Handle Midtrans Notification (Callback)
     */
    public function handleNotification(Request $request)
    {
        // 1. Log semua notifikasi masuk untuk debugging
        Log::info('Midtrans Notification:', $request->all());
        
        // 2. Validasi signature key
        $signatureKey = $request->server('HTTP_X_CALLBACK_SIGNATURE');
        $expectedSignature = hash('sha512', $request->order_id.$request->status_code.$request->gross_amount.config('midtrans.server_key'));
        
        if ($signatureKey !== $expectedSignature) {
            Log::error('Invalid Midtrans Signature');
            return response()->json(['error' => 'Invalid signature'], 403);
        }
    
        // 3. Proses update status
        $order = Order::where('order_id', $request->order_id)->first();
        
        if (!$order) {
            Log::error('Order not found: '.$request->order_id);
            return response()->json(['error' => 'Order not found'], 404);
        }
    
        // 4. Mapping status Midtrans ke database
        $statusMap = [
            'capture' => 'success',
            'settlement' => 'success',
            'pending' => 'pending',
            'deny' => 'failed',
            'expire' => 'failed',
            'cancel' => 'failed'
        ];
    
        if (array_key_exists($request->transaction_status, $statusMap)) {
            $order->status = $statusMap[$request->transaction_status];
            $order->save();
            Log::info('Order updated: '.$order->order_id.' to '.$order->status);
        }
    
        return response()->json(['message' => 'Notification processed']);
    }
    public function checkPaymentStatus($orderId)
    {
        $order = Order::find($orderId);
        $status = \Midtrans\Transaction::status($order->order_id);
        
        $order->status = ($status->transaction_status == 'settlement') ? 'success' : 'failed';
        $order->save();
        
        return back()->with('success', 'Status diperbarui!');
    }
    /**
     * Halaman Sukses Pembayaran
     */
    public function paymentSuccess(Request $request)
    {
        $orderId = $request->query('order_id');
        $pemesanan = Pemesanan::where('order_id', $orderId)->first();

        if (!$pemesanan) {
            return redirect()->route('checkout.index')->with('error', 'Pesanan tidak ditemukan!');
        }

        return view('checkout.success', [
            'order_id' => $orderId,
            'pemesanan' => $pemesanan,
        ]);
    }

    /**
     * Halaman Pending Pembayaran
     */
    public function paymentPending(Request $request)
    {
        $orderId = $request->query('order_id');
        $pemesanan = Pemesanan::where('order_id', $orderId)->first();

        return view('checkout.pending', [
            'order_id' => $orderId,
            'pemesanan' => $pemesanan,
        ]);
    }

    /**
     * Halaman Error Pembayaran
     */
    public function paymentError(Request $request)
    {
        $orderId = $request->query('order_id');
        return view('checkout.error', ['order_id' => $orderId]);
    }

    /**
     * Hitung Total Harga dari Keranjang
     */
    private function calculateTotal($carts)
    {
        return $carts->sum(function ($cart) {
            return $cart->merchandise->harga * $cart->quantity;
        });
    }

    /**
     * Siapkan Detail Item untuk Midtrans
     */
    private function prepareItemDetails($carts)
    {
        return $carts->map(function ($cart) {
            return [
                'id' => $cart->merchandise->id,
                'name' => $cart->merchandise->nama,
                'price' => $cart->merchandise->harga,
                'quantity' => $cart->quantity,
            ];
        })->toArray();
    }
}