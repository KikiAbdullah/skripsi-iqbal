@extends('layouts.front')

@section('customcss')
@endsection

@section('content')

<section class="touch__arae include__bg pt-120 pb-120" data-background="assets/img/shape/touch-shape.png">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4">
                <div class="touch__left mb-60">
                    <div class="section__title-wrapper">
                        <h2 class="section__title mb-30">
                            Diagnosa Tingkat Depresi
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
            <div class="col-xl-8 col-lg-8">
                <div class="touch__contact p-relative">
                    <div class="touch__carcle"></div>
                    <div class="touch__content-title">
                        <h3>Pertanyaan</h3>
                    </div>
                    <form action="#">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="sign__action">
                                    <div class="btn-group" data-toggle="buttons">
                                        <label class="border__btn">
                                            <input type="radio" name="options" id="option1"> Option 1
                                        </label>
                                        <label class="border__btn">
                                            <input type="radio" name="options" id="option2"> Option 2
                                        </label>
                                        <label class="border__btn">
                                            <input type="radio" name="options" id="option3"> Option 3
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="sign__action">
                                <input class="e-check-input" type="checkbox" id="sing-up">
                                <label class="sign__check" for="sing-up">Accept Our <span><a href="#">Terms</a>
                                        &amp; <a href="#">Conditions</a></span></label>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="sign__action">
                                <input class="e-check-input" type="checkbox" id="sing-up">
                                <label class="sign__check" for="sing-up">Accept Our <span><a href="#">Terms</a>
                                        &amp; <a href="#">Conditions</a></span></label>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="sign__action">
                                <input class="e-check-input" type="checkbox" id="sing-up">
                                <label class="sign__check" for="sing-up">Accept Our <span><a href="#">Terms</a>
                                        &amp; <a href="#">Conditions</a></span></label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="touch__submit">
                                <div class="sign__action">
                                    <input class="e-check-input" type="checkbox" id="sing-up">
                                    <label class="sign__check" for="sing-up">Accept Our <span><a href="#">Terms</a>
                                            &amp; <a href="#">Conditions</a></span></label>
                                </div>
                                <div class="touch__btn">
                                    <button type="button"></button>
                                    <a class="border__btn" href="#">Submit Qure</a>
                                </div>
                            </div>
                        </div>
                </div>
                </form>
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