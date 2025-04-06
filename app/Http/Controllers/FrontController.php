<?php

namespace App\Http\Controllers;

use App\Models\Album;
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

    /**
     * Menampilkan daftar event.
     */
    public function events()
    {
        $events = Event::all(); // Ambil semua data event
        return view('events', compact('events'));
    }
    public function musisi()
    {
        $musisis = Musisi::all();
        return view('musisi', compact('musisis'));
    }
    public function albums()
    {
        $albums = Album::all(); // Menggunakan pagination agar tidak terlalu panjang
        return view('albums', compact('albums'));
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
    
    /**
     * Menampilkan daftar merchandise.
     */
    public function merchandises()
    {
        $merchandises = Merchandise::paginate(10); // Ambil data merchandise dengan pagination
        return view('merchandises.index', compact('merchandises'));
    }

    /**
     * Menampilkan detail merchandise berdasarkan ID.
     */
    public function showMerchandise($id)
    {
        $merchandise = Merchandise::findOrFail($id); // Ambil data merchandise berdasarkan ID
        return view('merchandises.show', compact('merchandise'));
    }
}