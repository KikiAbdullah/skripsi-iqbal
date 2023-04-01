<?php

namespace App\Http\Controllers\Traits;

use App\Models\Gejala;
use App\Models\Kerusakan;
use App\Models\TipeMotor;
use DB;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

trait ListTrait
{

    public function list_role()
    {
        return Role::pluck('name', 'id');
    }

    public function list_kerusakan()
    {
        return Kerusakan::pluck('text', 'kode');
    }

    public function list_gejala()
    {
        return Gejala::pluck('text', 'kode');
    }

    public function list_tipe_motor()
    {
        return TipeMotor::pluck('name', 'id');
    }
}
