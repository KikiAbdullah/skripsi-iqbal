@extends('layouts.front')

@section('customcss')
@endsection

@section('content')
<!-- ======================= Top Breadcrubms ======================== -->
<div class="gray py-3">
    <div class="container">
        <div class="row">
            <div class="colxl-12 col-lg-12 col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">Informasi</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- ======================= Top Breadcrubms ======================== -->

<!-- ======================= Blog Start ============================ -->
<section class="middle">
    <div class="container">

        <div class="row">

            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <div class="_blog_wrap">
                    <div class="_blog_thumb mb-2">
                        <a href="{{ route('front.info-detail', 1) }}" class="d-block">
                            <img src="{{ asset('info/1/1.jpg') }}" class="img-fluid rounded" alt="" />
                        </a>
                    </div>
                    <div class="_blog_caption">
                        <span class="text-muted">5 Apr 2023</span>
                        <h5 class="bl_title lh-1">
                            <a href="{{ route('front.info-detail', 1) }}">Kenali Kode Kerusakan pada Yamaha Nmax</a>
                        </h5>
                        <p> Yamaha Nmax memiliki beberapa kode untuk mengetahui jenis kerusakan yang dialami oleh
                            mesin....</p>
                        <a href="{{ route('front.info-detail', 1) }}" class="text-dark fs-sm">Lanjut Membaca...</a>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <div class="_blog_wrap">
                    <div class="_blog_thumb mb-2">
                        <a href="{{ route('front.info-detail',2) }}" class="d-block"><img
                                src="{{ asset('info/2/1.jpg') }}" class="img-fluid rounded" alt="" /></a>
                    </div>
                    <div class="_blog_caption">
                        <span class="text-muted">5 Apr 2023</span>
                        <h5 class="bl_title lh-1">
                            <a href="{{ route('front.info-detail',2) }}">
                                8 Cara Merawat Motor Matic Injeksi Yang Benar
                            </a>
                        </h5>
                        <p>Kamu Harus Tau, Ini Peraturan Tak Tertulis yang Bisa Menjagamu Tetap Aman di Jalan Raya

                            Setidaknya 80% ....</p>
                        <a href="{{ route('front.info-detail',2) }}" class="text-dark fs-sm">Lanjut Membaca...</a>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <div class="_blog_wrap">
                    <div class="_blog_thumb mb-2">
                        <a href="{{ route('front.info-detail',3) }}" class="d-block"><img
                                src="{{ asset('info/3/1.jpg') }}" class="img-fluid rounded" alt="" /></a>
                    </div>
                    <div class="_blog_caption">
                        <span class="text-muted">5 Apr 2023</span>
                        <h5 class="bl_title lh-1">
                            <a href="{{ route('front.info-detail',3) }}">
                                Ada Indikator Oli di Yamaha NMAX Terbaru, Ini Fungsi dan Cara Pakainya
                            </a>
                        </h5>
                        <p>Nah, fitur yang banyak dicari fungsinya oleh pemilik Yamaha NMAX produksi 2020-sekarang,
                            adalah Oil Trip.. </p>
                        <a href="{{ route('front.info-detail',3) }}" class="text-dark fs-sm">Lanjut Membaca...</a>
                    </div>
                </div>
            </div>
        </div>

        {{-- <div class="row justify-content-center">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="position-relative text-center">
                    <a href="javascript:void(0);" class="btn stretched-link borders">Informasi Lainnya<i
                            class="lni lni-arrow-right ml-2"></i></a>
                </div>
            </div>
        </div> --}}
    </div>
</section>
<!-- ======================= Blog Start ============================ -->
@endsection

@section('customjs')
@endsection

@section('notification')
@include('layouts.notification')
@endsection