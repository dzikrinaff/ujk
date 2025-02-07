<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function indexPage()
    {
               return view('admin.dashboard'); // Sesuaikan dengan view yang ada

    }
}
