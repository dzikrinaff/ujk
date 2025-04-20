<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Album;
use Validator;

class AlbumController extends Controller
{
    public function index()
    {
        $albums = Album::latest()->get();
        return response()->json([
            'success' => true,
            'message' => 'Daftar Album',
            'data'    => $albums,
        ], 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'judul'          => 'required|unique:albums',
            'tanggal_rilis'  => 'required|date',
            'deskripsi'      => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validasi gagal',
                'errors'  => $validator->errors(),
            ], 422);
        }

        try {
            $album = Album::create([
                'judul'         => $request->judul,
                'tanggal_rilis' => $request->tanggal_rilis,
                'deskripsi'     => $request->deskripsi,
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Album berhasil dibuat',
                'data'    => $album,
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan',
                'errors'  => $e->getMessage(),
            ], 500);
        }
    }

    public function show($id)
    {
        try {
            $album = Album::findOrFail($id);
            return response()->json([
                'success' => true,
                'message' => 'Detail Album',
                'data'    => $album,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Data tidak ditemukan',
                'errors'  => $e->getMessage(),
            ], 404);
        }
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'judul'          => 'required',
            'tanggal_rilis'  => 'required|date',
            'deskripsi'      => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validasi gagal',
                'errors'  => $validator->errors(),
            ], 422);
        }

        try {
            $album = Album::findOrFail($id);
            $album->update([
                'judul'         => $request->judul,
                'tanggal_rilis' => $request->tanggal_rilis,
                'deskripsi'     => $request->deskripsi,
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Album berhasil diperbarui',
                'data'    => $album,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan',
                'errors'  => $e->getMessage(),
            ], 500);
        }
    }

    public function destroy($id)
    {
        try {
            $album = Album::findOrFail($id);
            $album->delete();

            return response()->json([
                'success' => true,
                'message' => 'Album "' . $album->judul . '" berhasil dihapus',
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Data tidak ditemukan',
                'errors'  => $e->getMessage(),
            ], 404);
        }
    }
}
