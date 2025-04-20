<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    // Menampilkan semua event
    public function index()
    {
        $events = Event::all();

        return response()->json([
            'success' => true,
            'message' => 'List semua event',
            'data' => $events
        ]);
    }

    // Menyimpan event baru
    public function store(Request $request)
    {
        $request->validate([
            'nama_event' => 'required|string|max:255',
            'lokasi' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'ticket_url' => 'required|url',
            'deskripsi' => 'required|string',
        ]);

        $event = Event::create([
            'nama_event' => $request->nama_event,
            'lokasi' => $request->lokasi,
            'tanggal' => $request->tanggal,
            'ticket_url' => $request->ticket_url,
            'deskripsi' => $request->deskripsi,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Event berhasil ditambahkan',
            'data' => $event
        ], 201);
    }

    // (Opsional) Menghapus event
    public function destroy($id)
    {
        $event = Event::find($id);

        if (!$event) {
            return response()->json([
                'success' => false,
                'message' => 'Event tidak ditemukan',
            ], 404);
        }

        $event->delete();

        return response()->json([
            'success' => true,
            'message' => 'Event berhasil dihapus',
        ]);
    }
}
