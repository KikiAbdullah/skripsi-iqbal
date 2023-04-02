@extends('layouts.front')

@section('customcss')
@endsection

@section('content')

<!-- ======================= Home Banner ======================== -->
<div class="home-banner margin-bottom-0" style="background:#eff6f2 url({{ asset('workplex/img/bg.jpg') }}) no-repeat;">
    <div class="container">
        <div class="row justify-content-start">
            <div class="col-xl-6 col-lg-9 col-md-12 col-sm-12 col-12">
                <div class="banner_caption text-left mb-4">
                    <h1 class="banner_title ft-bold mb-1 text-white">DIAGNOSA KERUSAKAN<br>MOTOR MATIC
                        KAMU GRATIS!</h1>
                    <p class="fs-md ft-regular text-white">Temukan solusi kerusakan sepeda motor matic mu
                        disini.</p>
                </div>
            </div>
            <div class="col-xl-8 col-lg-10 col-md-12 col-sm-12 col-12">

                <a href="{{ route('front.form') }}" class="btn btn-md theme-bg rounded text-light hover-theme">Cek
                    Sekarang<i class="lni lni-arrow-right-circle ml-2"></i></a>

            </div>
        </div>
    </div>
</div>
<!-- ======================= Home Banner ======================== -->

<!-- ======================= About Start ============================ -->
<section class="space">
    <div class="container">

        <div class="row align-items-center justify-content-between">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="m-spaced">
                    <div class="position-relative">
                        <div class="mb-1"><span class="theme-bg-light theme-cl px-2 py-1 rounded">About</span></div>
                        <h2 class="ft-medium mb-4">SISTEM INFORMASI KERUSAKAN SEPEDA MOTOR N-MAX & XMAX</h2>
                        <p class="mb-4 text-justify">Sistem Informasi Kerusakan Sepeda Motor N-MAX & XMAX ini merupakan
                            sebuah platform
                            yang berfungsi untuk mendiagnosa kerusakan sepeda motor N-MAX & XMAX secara mandiri, selain
                            berfungsi untuk mendiagnosa kerusakan secara mandiri, sistem informasi ini diharapkan dapat
                            menghemat waktu serta biaya yang dikeluarkan oleh pengguna sepeda motor saat melakukan
                            perbaikan
                            dan juga diharapkan dapat menjadi alat yang berguna untuk meminimalisir kecurangan yang
                            dilakukan oleh oknum mekanik bengkel sepeda motor.</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12">
                <div class="position-relative">
                    <img src="{{ asset('workplex/img/logo.png') }}" class="img-fluid" alt="" />
                </div>
            </div>
        </div>

    </div>
</section>
<!-- ======================= About Start ============================ -->

<!-- ======================= Blog Start ============================ -->
<section class="space" style="padding-top: 0px !important;">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="sec_title position-relative text-center mb-4">
                    <h2 class="ft-bold">Informasi Terbaru</h2>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <div class="_blog_wrap">
                    <div class="_blog_thumb mb-2">
                        <a href="{{ route('front.info-detail') }}" class="d-block"><img
                                src="https://imgx.gridoto.com/crop/132x222:680x580/700x465/filters:watermark(file/2017/gridoto/img/watermark.png,5,5,60)/photo/2019/11/18/957319149.jpg"
                                class="img-fluid rounded" alt="" /></a>
                    </div>
                    <div class="_blog_caption">
                        <span class="text-muted">26 Jan 2023</span>
                        <h5 class="bl_title lh-1">
                            <a href="{{ route('front.info-detail') }}">Ini Gejala yang Muncul Saat Modul ABS di Yamaha NMAX Rusak!</a>
                        </h5>
                        <p> Buat pemilik Yamaha NMAX ABS yang sudah berumur harus waspada dengan modul ABS rusak.
                            Seiring umur pemakaian..</p>
                        <a href="{{ route('front.info-detail') }}" class="text-dark fs-sm">Continue Reading..</a>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <div class="_blog_wrap">
                    <div class="_blog_thumb mb-2">
                        <a href="{{ route('front.info-detail') }}" class="d-block"><img
                                src="https://imgx.gridoto.com/crop/111x80:811x455/700x465/photo/gridoto/2018/05/12/1922260545.jpg"
                                class="img-fluid rounded" alt="" /></a>
                    </div>
                    <div class="_blog_caption">
                        <span class="text-muted">17 July 2023</span>
                        <h5 class="bl_title lh-1">
                            <a href="{{ route('front.info-detail') }}">Lengkap, Arti Kode Check Engine Yamaha NMAX
                                Generasi Pertama
                            </a>
                        </h5>
                        <p>Beberapa pengguna atau mekanik masih ada yang bingung soal kode check engine yang muncul di
                            Yamaha NMAX..</p>
                        <a href="{{ route('front.info-detail') }}" class="text-dark fs-sm">Continue Reading..</a>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <div class="_blog_wrap">
                    <div class="_blog_thumb mb-2">
                        <a href="{{ route('front.info-detail') }}" class="d-block"><img
                                src="https://imgx.gridoto.com/crop/0x0:0x0/700x465/photo/2023/03/17/13cjpg-20230317103328.jpg"
                                class="img-fluid rounded" alt="" /></a>
                    </div>
                    <div class="_blog_caption">
                        <span class="text-muted">10 Aug 2023</span>
                        <h5 class="bl_title lh-1">
                            <a href="{{ route('front.info-detail') }}">Yamaha NMAX Edisi Spesial Resmi Dijual,
                                Detailnya Keren dan Futuristis</a>
                        </h5>
                        <p> Motor matic Yamaha NMAX 155 Connected edisi spesial resmi dijual, detailnya tampak keren dan
                            futuristis...</p>
                        <a href="{{ route('front.info-detail') }}" class="text-dark fs-sm">Continue Reading..</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- ======================= Blog Start ============================ -->

@endsection

@section('customjs')
@endsection

@section('notification')
@include('layouts.notification')
@endsection