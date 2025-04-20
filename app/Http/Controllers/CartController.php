<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Merchandise;
use App\Models\Pemesanan;
use App\Models\PemesananItem;
use App\Models\Pembayaran;
use App\Http\Controllers\MidtransController;
use App\Http\Controllers\CheckoutController;

use Illuminate\Http\Request;

class CartController extends Controller
{
    // Menampilkan isi keranjang
    public function index()
    {
        $carts = Cart::with('merchandise')
            ->where('user_id', auth()->id())
            ->get();

        $total = $carts->sum(function ($cart) {
            return $cart->merchandise->harga * $cart->quantity;
        });

        return view('cart.index', compact('carts', 'total'));
    }

    // Menambahkan item ke dalam keranjang
    public function store(Request $request, $id)
    {
        $merchandise = Merchandise::findOrFail($id);

        // Cek apakah stok cukup
        if ($merchandise->stok < 1) {
            return back()->with('error', 'Stok barang tidak mencukupi');
        }

        $cart = Cart::where('user_id', auth()->id())
            ->where('merchandise_id', $id)
            ->first();

        if ($cart) {
            // Jika item sudah ada, tambah quantity
            $cart->increment('quantity');
        } else {
            // Jika item belum ada, buat item baru
            Cart::create([
                'user_id' => auth()->id(),
                'merchandise_id' => $id,
                'quantity' => 1
            ]);
        }

        return redirect()->route('cart.index')->with('success', 'Item ditambahkan ke keranjang');
    }

    // Mengupdate jumlah item di keranjang
    public function update(Request $request, $id)
    {
        $cart = Cart::findOrFail($id);
    
        // Pastikan yang edit adalah pemilik cart
        if ($cart->user_id !== auth()->id()) {
            abort(403);
        }
    
        $requestedQty = (int) $request->quantity;
        $stok = $cart->merchandise->stok;
    
        // Validasi agar tidak bisa kurang dari 1 dan tidak lebih dari stok
        $cart->quantity = max(1, min($requestedQty, $stok));
        $cart->save();
    
        return redirect()->route('cart.index')->with('success', 'Keranjang Berhasil Diubah .');
    }
    
    // Menghapus item dari keranjang
    public function destroy(Cart $cart)
    {
        $cart->delete();
        return back()->with('success', 'Barang dikeluarkan dari keranjang');
    }
}
