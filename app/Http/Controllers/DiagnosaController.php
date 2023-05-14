<?php

namespace App\Http\Controllers;

use App\Models\Diagnosa;
use App\Models\Gejala;
use App\Models\Kerusakan;
use App\Models\Rule;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;
use Barryvdh\DomPDF\Facade\Pdf;

class DiagnosaController extends Controller
{
    public function __construct(Diagnosa $model)
    {
        $this->title            = 'Diagnosa';
        $this->subtitle         = 'Master Diagnosa';
        $this->model_request    = Request::class;
        $this->folder           = '';
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
            ->addColumn('kerusakan', function ($data) {
                return $data->kerusakan->text ?? "";
            })
            ->editColumn('tipe_motor', function ($data) {
                return $data->tipeMotor->name ?? "";
            })
            ->addColumn('gejala', function ($data) {
                $data = Gejala::whereIn('kode', $data->gejala)->pluck('text');

                return implode('<br>', $data->toArray())  ?? "";
            })
            ->rawColumns(['gejala'])
            ->toJson();
    }

    public function show($id)
    {
        return redirect()->route('front.hasil', ['id' => $id]);
    }

    public function diagnosa(Request $request)
    {
        try {
            $data = $request->all();

            if ($data['name'] == "") {
                return $this->redirectBackWithError('Nama wajib diisi');
            }


            $kerusakan = Kerusakan::pluck('kode');

            if (count($data['gejala']) > 0) {
                $hasil = [];
                foreach ($kerusakan as $key => $value) {
                    $rule = Rule::whereIn('kode_gejala', $data['gejala'])
                        ->where('kode_kerusakan', $value)
                        ->get();


                    if (count($rule) > 0) {
                        foreach ($rule as $ruleKey) {
                            @$hasil[$ruleKey->kode_kerusakan] += 1;
                        }
                    } else {
                        continue;
                    }
                }

                arsort($hasil);

                $kode_kerusakan = array_key_first($hasil);

                $diagnosa =  Diagnosa::create([
                    'tanggal'           => Carbon::now(),
                    'name'              => $data['name'] ?? "",
                    'tipe_motor'        => $data['tipe_motor'] ?? "",
                    'kode_kerusakan'    => $kode_kerusakan,
                    'kode_gejala'       => json_encode($data['gejala'])
                ]);


                return redirect()->route('front.hasil', ['id' => $diagnosa->id]);
            } else {
                return $this->redirectBackWithError('Gejala harus dipilih');
            }
        } catch (Exception $e) {
            return $this->redirectBackWithError($e->getMessage());
        }
    }

    public function print(Request $request)
    {
        $diagnosa = Diagnosa::with(['kerusakan'])->find($request->id);

        $view               = [
            'title'            => 'Diagnosa',
            'diagnosa'      => $diagnosa,
            'gejala'        => Gejala::whereIn('kode', $diagnosa->gejala)->pluck('text'),
        ];

        $pdf = Pdf::loadView('front.print', $view);
        $pdf->setOption('enable-javascript', true);
        $pdf->setOption('javascript-delay', 5000);
        $pdf->setOption('enable-smart-shrinking', true);
        $pdf->setOption('no-stop-slow-scripts', true);
        $pdf->setPaper('a4');

        return $pdf->stream();
    }
}
