<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Event;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $albums = Album::all();
        
        return view('welcome',compact('albums'));
    }
    public function events()
    {
        $events = Event::all();
        return view('events', compact('events')); // Ubah jika file ada di dalam folder
    }
}
