<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\Gejala;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class GejalaController extends Controller
{
    public function __construct(Gejala $model)
    {
        $this->title            = 'Gejala';
        $this->subtitle         = 'Master Gejala';
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
