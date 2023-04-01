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
                        <li class="breadcrumb-item active" aria-current="page">About</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- ======================= Top Breadcrubms ======================== -->

<!-- ======================= About Us Detail ======================== -->
<section class="middle">
    <div class="container">
        <div class="row align-items-center justify-content-between">

            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="abt_caption">
                    <h2 class="ft-medium mb-4">SISTEM INFORMASI KERUSAKAN SEPEDA MOTOR N-MAX & XMAX</h2>
                    <p class="mb-4 text-justify">Sistem Informasi Kerusakan Sepeda Motor N-MAX & XMAX ini merupakan sebuah platform
                        yang berfungsi untuk mendiagnosa kerusakan sepeda motor N-MAX & XMAX secara mandiri, selain
                        berfungsi untuk mendiagnosa kerusakan secara mandiri, sistem informasi ini diharapkan dapat
                        menghemat waktu serta biaya yang dikeluarkan oleh pengguna sepeda motor saat melakukan perbaikan
                        dan juga diharapkan dapat menjadi alat yang berguna untuk meminimalisir kecurangan yang
                        dilakukan oleh oknum mekanik bengkel sepeda motor.</p>

                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="abt_caption">
                    <img src="{{ asset('workplex/img/logo.png') }}" class="img-fluid rounded" alt="" />
                </div>
            </div>

        </div>
    </div>
</section>
<!-- ======================= About Us End ======================== -->
@endsection

@section('customjs')
@endsection

@section('notification')
@include('layouts.notification')
@endsection