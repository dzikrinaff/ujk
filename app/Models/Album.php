<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = [  'judul','tanggal_rilis','deskripsi'];
    protected $visible = [ 'judul','tanggal_rilis','deskripsi'];
   
    public function lagu()
    {
        return $this->hasMany(Lagu::class, 'album_id');
    }
}
