<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(Request $request)
    {
        return view('front.index');
    }

    public function form_faq(Request $request)
    {
        $gejala = $this->list_gejala();
        return view('front.form-faq', compact('gejala'));
    }

    public function form(Request $request)
    {
        return view('front.form');
    }
}
