@extends('layouts.front')

@section('customcss')
@endsection

@section('content')

<section class="touch__arae include__bg pt-120 pb-120" data-background="assets/img/shape/touch-shape.png">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="touch__left mb-60">
                    <div class="section__title-wrapper">
                        <h2 class="section__title mb-30">
                            Hasil Diagnosa Kerusakan Motor
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row align-items-center wow fadeInUp" data-wow-delay=".3s">
            <div class="col-xl-6 col-lg-6">
                <div class="about__thumb-wrapper mb-60">
                    <div class="about__thumb">
                        <img src="{{ asset($diagnosa->kerusakan->img) }}" alt="image not found"
                            style="max-width: 500px;">
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="about__content-wapper mb-60">
                    <div class="section__title-wrapper mb-40">
                        <h2 class="section__title-2">{{ $diagnosa->kerusakan->text ?? "" }}</h2>
                    </div>
                    <p>{{ $diagnosa->kerusakan->deskripsi ?? "" }}</p>
                    <div class="about__features-box">
                        @foreach ($gejala as $data_gejala)
                        <div class="about__features-item">
                            <div class="about__features-icon s-2">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <div class="about__features-content">
                                <p>{{ $data_gejala }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <a href="{{ route('front.form') }}" rel="noopener noreferrer" class="border__btn">
                    Cek Kembali
                </a>
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