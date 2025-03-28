<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Musisi extends Model
{
    use HasFactory;

    protected $fillable = ['gambar', 'nama_musisi', 'deskripsi', 'ig_url'];
}
