<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $fillable = [  'pemesanan_id','tanggal_order','total_pembayaran','payment_type', 'payment_status'];
    protected $visible = [  'pemesanan_id','tanggal_order','total_pembayaran','payment_type', 'payment_status',];
  

    public function pemesanan()
    {
        return $this->belongsTo(Pemesanan::class);
    }
}
