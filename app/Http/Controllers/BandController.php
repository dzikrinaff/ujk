<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Band;

class BandController extends Controller
{
    public function index()
    {
        $bands = Band::all();
        return view('admin.bands.index', compact('bands'));
    }

    public function create()
    {
        return view('admin.bands.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'ig_url' => 'nullable|url',
            'yt_url' => 'nullable|url',
            'spotify_url' => 'nullable|url',
        ]);

        Band::create($request->all());

        return redirect()->route('bands.index')->with('success', 'Band berhasil ditambahkan!');
    }

    public function show(Band $band)
    {
        return view('.admin.bands.show', compact('band'));
    }

    public function edit(Band $band)
    {
        return view('admin.bands.edit', compact('band'));
    }

    public function update(Request $request, Band $band)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'ig_url' => 'nullable|url',
            'yt_url' => 'nullable|url',
            'spotify_url' => 'nullable|url',
        ]);

        $band->update($request->all());

        return redirect()->route('bands.index')->with('success', 'Band berhasil diperbarui!');
    }

    public function destroy(Band $band)
    {
        $band->delete();
        return redirect()->route('bands.index')->with('success', 'Band berhasil dihapus!');
    }
}
