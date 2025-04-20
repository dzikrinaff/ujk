<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'user_id',
        'telpon',
        'alamat',
        'total_harga',
        'status',
        'snap_token',
    ];

    public function items()
    {
        return $this->hasMany(PemesananItem::class);
    }

    /**
     * Relasi ke pembayaran
     */
    public function pembayaran()
    {
        return $this->hasOne(Pembayaran::class);
    }

    /**
     * Relasi ke user
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

   }