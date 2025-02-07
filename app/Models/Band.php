<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Band extends Model
{
    protected $fillable = [ 'nama','deskripsi','ig_url','yt_url','spotify_url'];
    protected $visible = ['nama','deskripsi','ig_url','yt_url','spotify_url'];

}
