<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lagu extends Model
{
    protected $fillable = ['album_id','judul','durasi','yt_url','spotify_url'];
    protected $visible =['album_id','judul','durasi','yt_url','spotify_url'];

   
    public function album()
    {
        return $this->belongsTo(Album::class);
    }
}
