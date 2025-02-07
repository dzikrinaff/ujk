<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    protected $fillable = ['user_id','telpon','alamat','merchandise_id','quantity','total_harga','status'];
    protected $visible = ['user_id','telpon','alamat','merchandise_id','quantity','total_harga','status'];
  
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function merchandise()
    {
        return $this->belongsTo(Merchandise::class);
    }

    public function pembayaran()
    {
        return $this->hasOne(Pembayaran::class);
    }
}
