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
                        <li class="breadcrumb-item"><a href="{{ route('front.bengkel') }}">Bengkel Terdekat</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $item->name ?? "-" }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- ======================= Top Breadcrubms ======================== -->

<!-- ============================ Main Section Start ================================== -->
<section class="bg-light py-5 position-relative">
    <div class="container">
        <div class="row">

            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">

                <div class="bg-white rounded px-3 py-4 mb-4">
                    <div class="jbd-01 d-flex align-items-center justify-content-between">
                        <div class="jbd-flex d-flex align-items-center justify-content-start">
                            {{-- <div class="jbd-01-thumb">
                                <img src="https://via.placeholder.com/120x120" class="img-fluid" width="90" alt="" />
                            </div> --}}
                            <div class="jbd-01-caption pl-3">
                                <div class="tbd-title">
                                    <h4 class="mb-0 ft-medium fs-md">{{ $item->name }}</h4>
                                </div>
                                <div class="jbl_location mb-3">
                                    <span><i class="lni lni-phone mr-1"></i>
                                        {{ $item->telp }}
                                    </span>
                                </div>
                                <div class="jbl_info01">
                                    <span><i class="lni lni-map-marker mr-1"></i>{{
                                        $item->alamat }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="jbd-01-right text-right hide-1023">
                            <div class="jbl_button mb-2"><a href="{{ $item->urlmaps }}" target="_blank"
                                    class="btn rounded theme-bg-light theme-cl fs-sm ft-medium">Lihat Maps</a></div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded mb-4">
                    <div class="jbd-01 px-3 py-4">
                        <div class="jbd-details mb-4">
                            <h5 class="ft-medium fs-md">Deskripsi</h5>
                            <p>
                                {{ $item->desc ?? "-" }}
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Sidebar -->
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <div class="jb-apply-form bg-white rounded py-3 px-4 box-static">
                    <h4 class="ft-medium fs-md mb-3">Alamat</h4>

                    <style>
                        .maps {
                            position: relative;
                            padding-bottom: 56.25%;
                            /* 16:9 */
                            padding-top: 25px;
                            height: 0;
                        }

                        .maps iframe {
                            position: absolute;
                            top: 0;
                            left: 0;
                            width: 100%;
                            height: 100%;
                        }
                    </style>
                    <div class="maps">
                        {!! $item->gmaps !!}
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- ============================ Main Section End ================================== -->
@endsection

@section('customjs')
@endsection

@section('notification')
@include('layouts.notification')
@endsection