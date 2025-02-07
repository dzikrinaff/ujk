<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Merchandise extends Model
{
    protected $fillable = ['nama','deskripsi','harga','stok','gambar_url'];
    protected $visible = ['nama','deskripsi','harga','stok','gambar_url'];
    
    public function pemesanan()
    {
        return $this->hasMany(Pemesanan::class, 'merchandise_id');
    }
}
