<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $albums = Album::all();
        
        return view('welcome',compact('albums'));
    }
}
