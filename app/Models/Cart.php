<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\MidtransController;
use App\Http\Controllers\CheckoutController;


class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'merchandise_id',
        'quantity'
    ];

    // Relasi ke User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relasi ke Merchandise
    public function merchandise()
    {
        return $this->belongsTo(Merchandise::class);
    }

    // Hitung subtotal untuk item ini
    public function getSubtotalAttribute()
    {
        return $this->merchandise ? $this->merchandise->harga * $this->quantity : 0;
    }

    // Cek apakah stok masih tersedia
    public function isAvailable()
    {
        return $this->merchandise && $this->quantity <= $this->merchandise->stok;
    }
}
