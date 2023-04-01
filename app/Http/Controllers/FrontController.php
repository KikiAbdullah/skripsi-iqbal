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

class FrontController extends Controller
{
    public function index(Request $request)
    {
        $data = [
            'active' => 'home',
        ];
        return view('front.index', $data);
    }

    public function about(Request $request)
    {
        $data = [
            'active' => 'about',
        ];
        return view('front.about', $data);
    }

    public function informasi(Request $request)
    {
        $data = [
            'active' => 'informasi',
        ];
        return view('front.informasi', $data);
    }

    public function info_detail(Request $request, $id = null)
    {
        $data = [
            'active' => 'informasi',
        ];
        return view('front.info-detail', $data);
    }

    public function panduan(Request $request)
    {
        $data = [
            'active' => 'panduan',
        ];
        return view('front.panduan', $data);
    }

    public function form(Request $request)
    {
        $data = [
            'gejala'        => $this->list_gejala(),
            'tipe_motor'    => $this->list_tipe_motor(),
            'active'        => 'diagnosa',
        ];

        return view('front.form', $data);
    }

    public function hasil(Request $request)
    {
        $diagnosa = Diagnosa::with(['kerusakan'])->find($request->id);

        $data = [
            'diagnosa'      => $diagnosa,
            'gejala'        => Gejala::whereIn('kode', $diagnosa->gejala)->pluck('text'),
            'active'        => 'diagnosa',
        ];

        return view('front.hasil', $data);
    }
}
