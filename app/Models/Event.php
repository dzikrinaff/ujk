<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Event extends Model
{
    use HasFactory;

    protected $fillable = ['nama_event', 'lokasi', 'tanggal', 'ticket_url', 'deskripsi'];

    protected $casts = [
        'tanggal' => 'date',
    ];

    protected $appends = ['formatted_tanggal']; // Menambahkan atribut akses

    public function getFormattedTanggalAttribute()
    {
        return $this->tanggal ? Carbon::parse($this->tanggal)->format('M d, Y') : null;
    }
}
