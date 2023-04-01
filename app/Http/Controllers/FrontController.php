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
        return view('front.index');
    }

    public function about(Request $request)
    {
        return view('front.about');
    }

    public function informasi(Request $request)
    {
        return view('front.informasi');
    }

    public function info_detail(Request $request, $id = null)
    {
        return view('front.info-detail');
    }

    public function panduan(Request $request)
    {
        return view('front.panduan');
    }

    public function form(Request $request)
    {
        $gejala = $this->list_gejala();

        $tipe_motor = $this->list_tipe_motor();

        return view('front.form', compact('gejala', 'tipe_motor'));
    }

    public function hasil(Request $request)
    {
        $diagnosa = Diagnosa::with(['kerusakan'])->find($request->id);

        $gejala = Gejala::whereIn('kode', $diagnosa->gejala)->pluck('text');

        return view('front.hasil', compact('diagnosa', 'gejala'));
    }
}
