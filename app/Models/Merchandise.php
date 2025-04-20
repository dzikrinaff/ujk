<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Merchandise extends Model
{
    protected $fillable = [
        'nama',
        'deskripsi',
        'harga',
        'stok',
        'gambar'
    ];

    // Relasi ke Pemesanan
    public function pemesanan()
    {
        return $this->hasMany(Pemesanan::class, 'merchandise_id');
    }
    public function pemesananItems() {
        return $this->hasMany(PemesananItem::class);
    }
    // Relasi ke Cart
    public function carts()
    {
        return $this->hasMany(Cart::class);
    }
}
