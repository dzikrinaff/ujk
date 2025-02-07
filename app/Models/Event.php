<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [  'nama','ticket_url','deskripsi'];
    protected $visible = [ 'nama','ticket_url','deskripsi'];
}
