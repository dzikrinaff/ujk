<?php

namespace App\Http\Controllers;

use App\Models\Merchandise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MerchandiseController extends Controller
{
    public function index()
    {
        $merchandise = Merchandise::all();
        return view('admin.merchandise.index', compact('merchandise'));
    }

    public function create()
    {
        return view('admin.merchandise.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
            'gambar' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        // Simpan gambar jika ada
        $gambar_url = null;
        if ($request->hasFile('gambar')) {
            $gambar_url = $request->file('gambar')->store('images', 'public');
        }

        Merchandise::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'gambar_url' => $gambar_url,
        ]);

        return redirect()->route('merchandise.index')->with('success', 'Merchandise berhasil ditambahkan.');
    }

    public function show(Merchandise $merchandise)
    {
        return view('admin.merchandise.show', compact('merchandise'));
    }

    public function edit(Merchandise $merchandise)
    {
        return view('admin.merchandise.edit', compact('merchandise'));
    }

    public function update(Request $request, Merchandise $merchandise)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
            'gambar' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        // Update gambar jika ada file baru yang diunggah
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($merchandise->gambar_url) {
                Storage::disk('public')->delete($merchandise->gambar_url);
            }

            $gambar_url = $request->file('gambar')->store('images', 'public');
        } else {
            $gambar_url = $merchandise->gambar_url;
        }

        $merchandise->update([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'gambar_url' => $gambar_url,
        ]);

        return redirect()->route('merchandise.index')->with('success', 'Merchandise berhasil diperbarui.');
    }

    public function destroy(Merchandise $merchandise)
    {
        // Hapus gambar jika ada
        if ($merchandise->gambar_url) {
            Storage::disk('public')->delete($merchandise->gambar_url);
        }

        $merchandise->delete();
        return redirect()->route('merchandise.index')->with('success', 'Merchandise berhasil dihapus.');
    }
}
