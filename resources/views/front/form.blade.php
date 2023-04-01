@extends('layouts.front')

@section('customcss')
<style>
    :root {
        --clr-theme-1: rgb(38, 166, 154);
        --clr-theme-1-fill: #f9f9f9;
    }

    /* First hide radios */
    .questions input[type="checkbox"] {
        display: none;
    }

    /* Generate new radio buttons, which we can style via css */
    .questions label:before {
        content: attr(data-question-number);
        display: inline-block;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        border: 1px solid;
        text-align: center;
        line-height: 30px;
        margin-right: 20px;
    }

    /* Applying styles when checking the buttons */
    .questions input[type="checkbox"]:checked~label {
        background-color: var(--clr-theme-1-fill);
        border-color: var(--clr-theme-1);
    }

    .questions input[type="checkbox"]:checked~label:before {
        background-color: var(--clr-theme-1-fill);
        border-color: var(--clr-theme-1);
        /* color: white; */
    }

    .questions label {
        display: block;
        cursor: pointer;

        padding: 10px;
        margin-bottom: 10px;
        background-color: white;
        border: 2px solid white;
        border-radius: 15px;
    }

    .questions {
        /* background-color: gray; */
        padding: 20px;
    }
</style>
@endsection

@section('content')


<!-- ======================= Top Breadcrubms ======================== -->
<div class="gray py-3">
    <div class="container">
        <div class="row">
            <div class="colxl-12 col-lg-12 col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">Diagnosa</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- ======================= Top Breadcrubms ======================== -->

<!-- ======================= Contact Page Detail ======================== -->
<section class="middle">
    <div class="container">

        <div class="row justify-content-center mb-5">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="sec_title position-relative text-center">
                    <h2 class="off_title">Diagnosa Kerusakan Sepeda Motor</h2>
                    <p class="mt-4 text-center"><strong>Dalam 2 minggu terakhir</strong>, seberapa sering
                        masalah-masalah berikut ini
                        mengganggu kamu? <br>
                        Pastikan untuk memberikan jawaban yang tepat sesuai
                        dengan pengalamanmu.
                    </p>
                </div>
            </div>
        </div>

        <div class="row align-items-start justify-content-between">


            <div class="col-md-12">
                {!! Form::open(['route' => 'front.diagnosa', 'method' => 'POST']) !!}
                @csrf
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="form-group">
                            <label class="small text-dark ft-medium">Nama</label>
                            {!! Form::text('name', null, ['class' => in_array('name', $errors->keys()) ?
                            'form-control is-invalid' : 'form-control', 'placeholder' => 'Nama']) !!}
                        </div>
                    </div>

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="form-group">
                            <label class="small text-dark ft-medium">Tipe Sepeda Motor</label>
                            {!! Form::select('tipe_motor', $tipe_motor, null, ['class' => 'custom-select',
                            'data-placeholder' => 'Tipe Sepeda Motor']) !!}
                        </div>
                    </div>

                    <div class="questions row">
                        @foreach ($gejala as $id => $data)
                        <div class="col-lg-6">
                            <div class="questions__question">
                                <input type="checkbox" name="gejala[{{ $id }}]" id="gejala-{{ $loop->iteration }}"
                                    value="{{ $id }}">
                                <label for="gejala-{{ $loop->iteration }}"
                                    data-question-number="{{ $loop->iteration }}">{{
                                    $data }}</label>
                            </div>
                        </div>
                        @endforeach
                    </div>


                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-dark">Submit</button>
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>

        </div>
    </div>
</section>
<!-- ======================= Contact Page End ======================== -->
@endsection

@section('customjs')
@endsection

@section('notification')
@include('layouts.notification')
@endsection