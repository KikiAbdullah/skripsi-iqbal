<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gejala extends Model
{
    use SoftDeletes;

    protected $table     = 'gejalas';
    protected $fillable = [
        'kode',
        'text',
    ];
}
