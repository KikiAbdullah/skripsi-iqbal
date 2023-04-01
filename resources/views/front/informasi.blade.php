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
                        <a href="{{ route('front.info-detail') }}" class="d-block"><img
                                src="https://imgx.gridoto.com/crop/132x222:680x580/700x465/filters:watermark(file/2017/gridoto/img/watermark.png,5,5,60)/photo/2019/11/18/957319149.jpg"
                                class="img-fluid rounded" alt="" /></a>
                    </div>
                    <div class="_blog_caption">
                        <span class="text-muted">26 Jan 2023</span>
                        <h5 class="bl_title lh-1">
                            <a href="{{ route('front.info-detail') }}">Ini Gejala yang Muncul Saat Modul ABS di Yamaha
                                NMAX Rusak!</a>
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

        <div class="row justify-content-center">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="position-relative text-center">
                    <a href="javascript:void(0);" class="btn stretched-link borders">Informasi Lainnya<i
                            class="lni lni-arrow-right ml-2"></i></a>
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