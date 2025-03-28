<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Merchandise extends Model
{
    protected $fillable = ['nama','deskripsi','harga','stok','gambar'];
    protected $visible = ['nama','deskripsi','harga','stok','gambar'];
    
    public function pemesanan()
    {
        return $this->hasMany(Pemesanan::class, 'merchandise_id');
    }
}
