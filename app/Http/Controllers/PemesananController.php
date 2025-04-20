<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Pemesanan;
use App\Models\PemesananItem;
use Illuminate\Support\Facades\Auth;
use Midtrans\Snap;
use Midtrans\Config;

class PemesananController extends Controller
{
    public function processCheckout(Request $request)
    {
        $user = Auth::user();
        $carts = Cart::where('user_id', $user->id)->with('merchandise')->get();

        // Cek apakah keranjang kosong
        if ($carts->isEmpty()) {
            return response()->json(['error' => 'Keranjang kosong'], 400);
        }

        // Hitung total harga
        $total = $carts->sum(fn($item) => $item->merchandise->harga * $item->quantity);
        $order_id = 'ORDER-' . $user->id . '-' . time();

        // Simpan pemesanan ke database
        $pemesanan = Pemesanan::create([
            'order_id'     => $order_id,
            'user_id'      => $user->id,
            'telpon'       => $request->telpon ?? '08xxxxxxxxxx',
            'alamat'       => $request->alamat ?? 'Alamat belum diisi',
            'total_harga'  => $total,
            'status'       => 'pending', // Status awal adalah pending
        ]);

        // Simpan item-item pemesanan
        foreach ($carts as $cart) {
            PemesananItem::create([
                'pemesanan_id'    => $pemesanan->id,
                'merchandise_id'  => $cart->merchandise_id,
                'quantity'        => $cart->quantity,
                'harga'           => $cart->merchandise->harga
            ]);
        }

        // Kosongkan cart setelah checkout
        Cart::where('user_id', $user->id)->delete();

        // Konfigurasi Midtrans
        Config::$serverKey = config('midtrans.server_key');
        Config::$isProduction = config('midtrans.is_production');
        Config::$isSanitized = true;
        Config::$is3ds = true;

        // Menyiapkan parameter untuk Snap
        $params = [
            'transaction_details' => [
                'order_id'     => $order_id,
                'gross_amount' => $total,
            ],
            'customer_details' => [
                'first_name' => $user->name,
                'email'      => $user->email,
                'phone'      => $request->telpon ?? '',
            ],
        ];

        try {
            // Dapatkan Snap Token
            $snapToken = Snap::getSnapToken($params);

            // Simpan snap token di tabel pemesanan
            $pemesanan->update(['snap_token' => $snapToken]);

            // Kembalikan snap_token dan order_id ke client
            return response()->json([
                'snap_token'   => $snapToken,
                'order_id'     => $order_id,
            ]);
        } catch (\Exception $e) {
            // Tangani kesalahan
            return response()->json([
                'error' => 'Payment processing failed: ' . $e->getMessage()
            ], 500);
        }
    }

    // Metode untuk menangani status pembayaran sukses
    public function success(Request $request)
    {
        $orderId = $request->query('order_id');
        $pemesanan = Pemesanan::where('order_id', $orderId)->firstOrFail();
    
        // Update status pemesanan menjadi 'success' jika belum
        if ($pemesanan->status != 'success') {
            $pemesanan->update(['status' => 'success']);
        }
    
        return view('checkout.success', [
            'pemesanan_id' => $orderId, // Sesuaikan dengan nama variabel di view
            'pemesanan' => $pemesanan // Jika dibutuhkan di view
        ]);
    }

    // Metode untuk menangani status pembayaran pending
    public function paymentPending(Request $request)
    {
        $orderId = $request->query('order_id');
        $pemesanan = Pemesanan::where('order_id', $orderId)->firstOrFail();

        return view('checkout.pending', ['pemesanan_id' => $orderId]);
    }

    // Metode untuk menangani status pembayaran gagal
    public function paymentError(Request $request)
    {
        $orderId = $request->query('order_id');
        $pemesanan = Pemesanan::where('order_id', $orderId)->firstOrFail();

        // Update status pemesanan menjadi 'failed'
        $pemesanan->update(['status' => 'failed']);

        return view('checkout.failed', ['pemesanan_id' => $orderId]);
    }
}
