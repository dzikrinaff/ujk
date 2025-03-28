<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Merchandise;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    /**
     * Menampilkan isi keranjang belanja.
     */
    public function index()
    {
        $cart = session()->get('cart', []);
        return view('cart.index', compact('cart'));
    }

    /**
     * Menambahkan item ke keranjang.
     */
    public function addToCart(Request $request, $id)
    {
        $merchandise = Merchandise::find($id);

        if (!$merchandise) {
            return redirect()->back()->with('error', 'Merchandise tidak ditemukan!');
        }

        // Ambil data keranjang dari session
        $cart = session()->get('cart', []);

        // Jika sudah ada di keranjang, tambahkan jumlahnya
        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "nama" => $merchandise->nama,
                "harga" => $merchandise->harga,
                "gambar" => $merchandise->gambar,
                "quantity" => 1
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Merchandise ditambahkan ke keranjang!');
    }

    /**
     * Mengupdate jumlah item di keranjang.
     */
    public function updateCart(Request $request, $id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity'] = $request->quantity;
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Keranjang diperbarui!');
        }

        return redirect()->back()->with('error', 'Item tidak ditemukan di keranjang!');
    }

    /**
     * Menghapus item dari keranjang.
     */
    public function removeFromCart($id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Item dihapus dari keranjang!');
        }

        return redirect()->back()->with('error', 'Item tidak ditemukan di keranjang!');
    }

    /**
     * Mengosongkan seluruh isi keranjang.
     */
    public function clearCart()
    {
        session()->forget('cart');
        return redirect()->back()->with('success', 'Keranjang dikosongkan!');
    }
}
