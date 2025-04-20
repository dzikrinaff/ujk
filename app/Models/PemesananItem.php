<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PemesananItem extends Model
{
    protected $fillable = [
        'pemesanan_id',
        'merchandise_id',
        'quantity',
        'harga_satuan'
    ];

    public function pemesanan()
    {
        return $this->belongsTo(Pemesanan::class);
    }

    public function merchandise()
    {
        return $this->belongsTo(Merchandise::class);
    }
}
