<?php

namespace App\Http\Controllers;

use App\Models\Lagu;
use App\Models\Album;
use Illuminate\Http\Request;

class LaguController extends Controller
{
    // Menampilkan semua lagu beserta album terkait
    public function index()
    {
        // Mengambil lagu dan relasi album terkait menggunakan eager loading
        $lagu = Lagu::with('album')->get();
        return view('admin.lagus.index', compact('lagu'));
    }

    // Menampilkan form untuk menambah lagu
    public function create()
    {
        // Mengambil semua album untuk form pemilihan album
        $albums = Album::all();
        return view('admin.lagus.create', compact('albums'));
    }

    // Menyimpan lagu baru ke database
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'album_id' => 'required|exists:albums,id', // Memastikan album_id ada di tabel albums
            'judul' => 'required|string|max:255', // Validasi judul lagu
            'durasi' => 'required', // Durasi harus diisi
            'lirik' => 'nullable|string', // Lirik opsional
            'yt_url' => 'nullable|url', // URL Youtube opsional
            'spotify_url' => 'nullable|url', // URL Spotify opsional
        ]);

        // Menyimpan lagu baru dengan data yang sudah tervalidasi
        Lagu::create($request->all());
        return redirect()->route('lagu.index')->with('success', 'Lagu berhasil ditambahkan.');
    }

    // Menampilkan form untuk mengedit lagu
    public function edit(Lagu $lagu)
    {
        // Mengambil semua album untuk form pemilihan album
        $albums = Album::all();
        return view('admin.lagus.edit', compact('lagu', 'albums'));
    }

    // Mengupdate data lagu
    public function update(Request $request, Lagu $lagu)
    {
        // Validasi input
        $request->validate([
            'album_id' => 'required|exists:albums,id', // Memastikan album_id ada di tabel albums
            'judul' => 'required|string|max:255', // Validasi judul lagu
            'durasi' => 'required', // Durasi harus diisi
            'lirik' => 'nullable|string', // Lirik opsional
            'yt_url' => 'nullable|url', // URL Youtube opsional
            'spotify_url' => 'nullable|url', // URL Spotify opsional
        ]);

        // Mengupdate data lagu
        $lagu->update($request->all());
        return redirect()->route('lagu.index')->with('success', 'Lagu berhasil diperbarui.');
    }

    // Menghapus lagu
    public function destroy(Lagu $lagu)
    {
        // Menghapus data lagu
        $lagu->delete();
        return redirect()->route('lagu.index')->with('success', 'Lagu berhasil dihapus.');
    }
}
