<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Diagnosa extends Model
{
    use SoftDeletes;

    protected $table     = 'diagnosas';
    protected $fillable = [
        'tanggal',
        'name',
        'tipe_motor',
        'kode_kerusakan',
        'kode_gejala',
    ];

    public function kerusakan()
    {
        return $this->belongsTo(Kerusakan::class, 'kode_kerusakan', 'kode');
    }

    public function tipeMotor()
    {
        return $this->belongsTo(TipeMotor::class, 'tipe_motor');
    }

    public function getGejalaAttribute()
    {
        return (array) json_decode($this->kode_gejala);
    }
}
