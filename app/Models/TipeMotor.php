<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TipeMotor extends Model
{
    use SoftDeletes;

    protected $table     = 'tipe_motors';
    protected $fillable = [
        'name',
    ];
}
