<?php

namespace App\Http\Controllers;

use App\Models\Musisi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MusisiController extends Controller
{
    public function index()
    {
        $musisis = Musisi::all();
        return view('admin.musisi.index', compact('musisis'));
    }

    public function create()
    {
        return view('admin.musisi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_musisi' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'ig_url' => 'nullable|string|max:255',
            'gambar' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2055',
        ]);

        $gambarPath = $request->file('gambar') ? $request->file('gambar')->store('musisi', 'public') : null;

        Musisi::create([
            'nama_musisi' => $request->nama_musisi,
            'deskripsi' => $request->deskripsi,
            'ig_url' => $request->ig_url,
            'gambar' => $gambarPath,
        ]);

        return redirect()->route('musisi.index')->with('success', 'Musisi berhasil ditambahkan.');
    }

    public function show(Musisi $musisi)
    {
        return view('admin.musisi.show', compact('musisi'));
    }

    public function edit(Musisi $musisi)
    {
        return view('admin.musisi.edit', compact('musisi'));
    }

    public function update(Request $request, Musisi $musisi)
    {
        $request->validate([
            'nama_musisi' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'ig_url' => 'nullable|string|max:255',
            'gambar' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2055',
        ]);

        if ($request->hasFile('gambar')) {
            if ($musisi->gambar) {
                Storage::disk('public')->delete($musisi->gambar);
            }
            $gambarPath = $request->file('gambar')->store('musisi', 'public');
        } else {
            $gambarPath = $musisi->gambar;
        }

        $musisi->update([
            'nama_musisi' => $request->nama_musisi,
            'deskripsi' => $request->deskripsi,
            'ig_url' => $request->ig_url,
            'gambar' => $gambarPath,
        ]);

        return redirect()->route('musisi.index')->with('success', 'Musisi berhasil diperbarui.');
    }

    public function destroy(Musisi $musisi)
    {
        if ($musisi->gambar) {
            Storage::disk('public')->delete($musisi->gambar);
        }

        $musisi->delete();
        return redirect()->route('musisi.index')->with('success', 'Musisi berhasil dihapus.');
    }
}
