@extends('layouts.front')

@section('customcss')
<style>
    :root {
        --clr-theme-1: #5897fc;
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

<section class="touch__arae include__bg pt-120 pb-120" data-background="assets/img/shape/touch-shape.png">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="touch__left mb-60">
                    <div class="section__title-wrapper">
                        <h2 class="section__title mb-30">
                            Diagnosa Kerusakan Motor
                        </h2>

                        <p><strong>Dalam 2 minggu terakhir</strong>, seberapa sering masalah-masalah berikut ini
                            mengganggu kamu?
                            <br><br>
                            Pastikan untuk memberikan jawaban yang tepat sesuai
                            dengan pengalamanmu.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12">
                <div class="touch__contact p-relative">
                    <div class="touch__carcle"></div>
                    <div class="touch__content-title">
                        <h3>Pertanyaan</h3>
                    </div>

                    {!! Form::open(['route' => 'front.diagnosa', 'method' => 'POST']) !!}
                    @csrf
                    <div class="questions">
                        <div class="row">
                            @foreach ($gejala as $id => $data)
                            <div class="col-lg-6 col-sm-12">
                                <div class="questions__question">
                                    <input type="checkbox" name="gejala[{{ $id }}]" id="gejala-{{ $loop->iteration }}"
                                        value="{{ $id }}">
                                    <label for="gejala-{{ $loop->iteration }}"
                                        data-question-number="{{ $loop->iteration }}">{{ $data }}</label>
                                </div>
                            </div>
                            @endforeach
                            <div class="col-12">
                                <div class="touch__submit">
                                    <div class="touch__btn">
                                        <button type="submit" class="border__btn">
                                            Submit
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Touch area end -->
@endsection

@section('customjs')
@endsection

@section('notification')
@include('layouts.notification')
@endsection