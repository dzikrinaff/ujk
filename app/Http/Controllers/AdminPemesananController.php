<?php
namespace App\Http\Controllers;

use App\Models\Pemesanan;
use Illuminate\Http\Request;

class AdminPemesananController extends Controller
{
    public function index()
    {
        $pemesanan = Pemesanan::with('user')->orderBy('created_at', 'desc')->get();
        return view('admin.pemesanan.index', compact('pemesanan'));
    }

    public function show($id)
    {
        $pemesanan = Pemesanan::with(['items.merchandise', 'user'])
                            ->findOrFail($id);
        
        return view('admin.pemesanan.show', compact('pemesanan'));
    }
}
