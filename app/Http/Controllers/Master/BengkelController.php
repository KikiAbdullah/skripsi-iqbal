<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\Bengkel;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class BengkelController extends Controller
{
    public function __construct(Bengkel $model)
    {
        $this->title            = 'Bengkel';
        $this->subtitle         = 'Master Bengkel';
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
