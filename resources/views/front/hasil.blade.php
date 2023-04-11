@extends('layouts.front')

@section('customcss')
@endsection

@section('content')
<!-- ======================= Top Breadcrubms ======================== -->
<div class="bg-light py-5">
    <div class="ht-30"></div>
    <div class="container">
        <div class="row">
            <div class="colxl-12 col-lg-12 col-md-12">
                <h1 class="ft-medium">Hasil Diagnosa Kerusakan Motor</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Diagnosa</a></li>
                        <li class="breadcrumb-item active theme-cl" aria-current="page">Hasil Diagnosa</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="ht-30"></div>
</div>
<!-- ======================= Top Breadcrubms ======================== -->

<!-- ======================= Dashboard Detail ======================== -->
<section class="middle">
    <div class="container">
        <div class="row align-items-start justify-content-between">

            <div class="col-12 col-md-12 col-lg-4 col-xl-4 text-center miliods">
                <div class="d-block border rounded mfliud-bot mb-4">
                    <div class="cdt_author px-2 pt-5 pb-4">
                        <div class="dash_auth_thumb rounded p-1 border d-inline-flex mx-auto mb-3">
                            <img src="{{ asset($diagnosa->kerusakan->img) }}" class="img-fluid" alt="" />
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-12 col-md-12 col-lg-8 col-xl-8">

                <!-- row -->
                <div class="row align-items-start">

                    <div class="jbd-details mb-4">
                        <div class="other-details">
                            <div class="details ft-medium"><label class="text-muted">Nama</label><span
                                    class="text-dark">{{ $diagnosa->name ?? "" }}</span></div>
                            <div class="details ft-medium"><label class="text-muted">Tipe Motor</label><span
                                    class="text-dark">{{ $diagnosa->tipeMotor->name ?? "" }}</span></div>
                        </div>
                    </div>

                    <!-- About -->
                    <div class="abt-cdt d-block full-width mb-4">
                        <h4 class="ft-medium mb-1 fs-md">Diagnosa Kerusakan :</h4>
                        <h2 class="ft-medium mb-1">{{ $diagnosa->kerusakan->text ?? "" }}</h2>
                        <br>

                        <h4 class="ft-medium mb-1 fs-md">Deskripsi :</h4>
                        <p class="text-justify">{{ $diagnosa->kerusakan->deskripsi ?? "" }}</p>
                    </div>

                    <!-- Hobbies -->
                    <div class="abt-cdt d-block full-width mb-4">
                        <h4 class="ft-medium mb-1 fs-md">Gejala Kerusakan :</h4>
                        <div class="position-relative row">
                            @foreach ($gejala as $data_gejala)
                            <div class="col-6">
                                <div class="mb-2 mr-4 ml-lg-0 mr-lg-4">
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="rounded-circle bg-light-danger p-1 small d-flex align-items-center justify-content-center">
                                            <i class="fas fa-times small"></i>
                                        </div>
                                        <h6 class="mb-0 ml-3 text-muted fs-sm">{{ $data_gejala }}
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="cdt_caps">
                        <a href="{{ route('front.form') }}"
                            class="btn btn-md theme-bg text-light rounded full-width">Cek
                            Kembali <i class="lni lni-arrow-right-circle ml-2"></i></a>
                    </div>
                </div>
                <!-- row -->

            </div>

        </div>
    </div>
</section>
<!-- ======================= Dashboard Detail End ======================== -->
@endsection

@section('customjs')
@endsection

@section('notification')
@include('layouts.notification')
@endsection