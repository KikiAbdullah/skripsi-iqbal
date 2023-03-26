<?php

namespace App\Http\Controllers\Master;

use App\Helpers\LogHelper;
use App\Http\Controllers\Controller;
use App\Models\Kerusakan;
use App\Models\Rule;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;
use Yajra\DataTables\DataTables;

class RuleController extends Controller
{
    public function __construct(Kerusakan $model)
    {
        $this->title            = 'Rule';
        $this->subtitle         = 'Master Rule';
        $this->model_request    = Request::class;
        $this->folder           = 'master';
        $this->relation         = [];
        $this->model            = $model;
        $this->withTrashed      = false;
    }

    public function formData()
    {
        return array(
            'list_kerusakan'    => $this->list_kerusakan(),
            'list_gejala'       => $this->list_gejala(),
        );
    }

    public function ajaxData()
    {
        if ($this->withTrashed) {
            $mapped             = $this->model->withTrashed()->query();
        } else {
            $mapped             = $this->model->query();
        }
        return DataTables::of($mapped)
            ->addColumn('kerusakan', function ($data) {
                return $data->text;
            })
            ->addColumn('gejala', function ($data) {
                return implode('<br>', $data->gejala->pluck('gejala.text')->toArray());
            })
            ->rawColumns(['gejala'])
            ->toJson();
    }


    public function store(Request $request)
    {
        try {

            DB::beginTransaction();

            $data  = $this->getRequest();

            $validation = $this->validatonStore($data);

            $model = $this->model->where('kode', $data['kode_kerusakan'])->first();

            foreach ($data['kode_gejala'] as $kode_gejala => $val) {
                Rule::create([
                    'kode_kerusakan' => $data['kode_kerusakan'],
                    'kode_gejala'   => $kode_gejala
                ]);
            }

            $log_helper     = new LogHelper;

            $log_helper->storeLog('add', $model->kode ?? $model->id, $this->subtitle);

            DB::commit();
            if ($request->ajax()) {
                $response           = [
                    'status'            => true,
                    'msg'               => 'Data Saved.',
                ];
                return response()->json($response);
            } else {
                return $this->redirectSuccess(__FUNCTION__, false);
            }
        } catch (Exception $e) {

            DB::rollback();
            if ($request->ajax()) {
                $response           = [
                    'status'            => false,
                    'msg'               => $e->getMessage(),
                ];
                return response()->json($response);
            } else {
                return $this->redirectBackWithError($e->getMessage());
            }
        }
    }

    public function validatonStore($data)
    {
        if (empty($data['kode_gejala'])) {
            $error = ValidationException::withMessages(['Gejala Harus dipilih']);
            throw $error;
        }

        Rule::where('kode_kerusakan', $data['kode_kerusakan'])->delete();
    }
}
