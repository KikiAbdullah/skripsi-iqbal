<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kerusakan extends Model
{
    use SoftDeletes;

    protected $table     = 'kerusakans';
    protected $fillable = [
        'kode',
        'text',
        'img',
        'deskripsi'
    ];

    public function gejala()
    {
        return $this->hasMany(Rule::class, 'kode_kerusakan', 'kode');
    }
}
