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

    public function form(Request $request)
    {
        $gejala = $this->list_gejala();

        return view('front.form', compact('gejala'));
    }

    public function hasil(Request $request)
    {
        $diagnosa = Diagnosa::with(['kerusakan'])->find($request->id);

        $gejala = Gejala::whereIn('kode', $diagnosa->gejala)->pluck('text');

        return view('front.hasil', compact('diagnosa', 'gejala'));
    }
}
