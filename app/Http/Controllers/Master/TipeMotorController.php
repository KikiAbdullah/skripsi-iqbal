<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\TipeMotor;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class TipeMotorController extends Controller
{
    public function __construct(TipeMotor $model)
    {
        $this->title            = 'Tipe Motor';
        $this->subtitle         = 'Master Tipe Motor';
        $this->model_request    = Request::class;
        $this->folder           = 'master';
        $this->relation         = [];
        $this->model            = $model;
        $this->withTrashed      = false;
    }

    public function ajaxData()
    {
        if ($this->withTrashed) {
            $mapped             = $this->model->withTrashed()->query();
        } else {
            $mapped             = $this->model->query();
        }
        return DataTables::of($mapped)
            ->toJson();
    }
}
