<?php

namespace App\Http\Controllers;

use App\Models\Diagnosa;
use App\Models\Kerusakan;
use App\Models\Rule;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DiagnosaController extends Controller
{
    public function diagnosa(Request $request)
    {
        try {
            $data = $request->all();

            $kerusakan = Kerusakan::pluck('kode');

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
                'kode_kerusakan'    => $kode_kerusakan,
                'kode_gejala'       => json_encode($data['gejala'])
            ]);


            return redirect()->route('front.hasil', ['id' => $diagnosa->id]);
        } catch (Exception $e) {
            throw $e;
        }
    }
}
