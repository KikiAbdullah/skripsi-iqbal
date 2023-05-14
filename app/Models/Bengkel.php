<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bengkel extends Model
{
    use SoftDeletes;

    protected $table     = 'bengkels';
    protected $fillable = [
        'gambar',
        'name',
        'telp',
        'alamat',
        'desc',
        'gmaps',
        'urlmaps',
    ];
}
