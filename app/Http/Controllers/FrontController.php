<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\lagu;
use App\Models\Event;
use App\Models\Merchandise;
use App\Models\Musisi;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    /**
     * Menampilkan halaman utama (home) dengan daftar album dan merchandise.
     */
    public function index()
    {
        $merchandises = Merchandise::paginate(10); // Ambil data merchandise dengan pagination
        return view('welcome', compact( 'merchandises'));
    }
  // Merchandise List
  public function merchandises()
  {
      $merchandises = Merchandise::latest()->get();
      return view('merchandise.index', compact('merchandises'));
  }

  public function showMerchandise($id)
  {
      $merchandise = Merchandise::findOrFail($id);
      return view('merchandise.show', compact('merchandise'));
  }

// Cart Show
public function showCart()
{
    $cart = session()->get('cart', []); // kasih default array biar ga error kalo kosong
    return view('cart.index', compact('cart'));
}


// Cart Add
public function addToCart($id)
{
    $merchandise = Merchandise::findOrFail($id);
    $cart = session()->get('cart', []);

    if (isset($cart[$id])) {
        $cart[$id]['quantity']++;
    } else {
        $cart[$id] = [
            'nama' => $merchandise->nama,
            'harga' => $merchandise->harga,
            'gambar_url' => $merchandise->gambar,
            'quantity' => 1
        ];
    }

    session()->put('cart', $cart);
    return redirect()->route('cart.index')->with('success', 'Berhasil tambah ke keranjang!');
}

// Cart Remove
public function removeFromCart($id)
{
    $cart = session()->get('cart', []);
    if (isset($cart[$id])) {
        unset($cart[$id]);
        session()->put('cart', $cart);
    }
    return redirect()->route('cart.index')->with('success', 'Item berhasil dihapus!');
}

// Checkout View
public function checkout()
{
    return view('cart.checkout');
}

    public function videos()
    {
        return view('video');
    }
    /**
     * Menampilkan detail event berdasarkan ID.
     */
    public function showEvent($id)
    {
        $event = Event::findOrFail($id); // Ambil data event berdasarkan ID
        return view('events.show', compact('event'));
    }
    public function musisi()
    {
        $musisis = Musisi::all();
        return view('musisi', compact('musisis'));
    }
    public function albums()
    {
        $albums = Album::all(); // Menggunakan pagination agar tidak terlalu panjang
        return view('album.index', compact('albums'));
    }
    public function detailAlbum($id)
    {
    $album = Album::findOrFail($id); // ambil album berdasarkan id
    return view('album.detail', compact('album'));
    }
    public function events()
    {
        $events = Event::all(); // Ambil semua data event
        return view('events', compact('events'));
    }

    /**
     * Menampilkan daftar merchandise.
     */

}