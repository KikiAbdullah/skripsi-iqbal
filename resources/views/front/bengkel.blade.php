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
                        <li class="breadcrumb-item active" aria-current="page">Bengkel Terdekat</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- ======================= Top Breadcrubms ======================== -->

<!-- ============================ Main Section Start ================================== -->
<section class="bg-light">
    <div class="container">
        <!-- row -->
        <div class="row align-items-center">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">


                @foreach ($items as $item)
                <!-- Single -->
                <div class="job_grid d-block border rounded px-3 pt-3 pb-2">
                    <div class="jb-list01-flex d-flex align-items-start justify-content-start">
                        {{-- <div class="jb-list01-thumb">
                            <a href="{{ route('front.bengkel-detail', $item->id) }}">
                                <img src="https://via.placeholder.com/120x120" class="img-fluid" width="90" alt="" />
                            </a>
                        </div> --}}

                        <div class="jb-list01 pl-3">
                            <div class="jb-list-01-title">
                                <h5 class="ft-medium mb-1">
                                    <a href="{{ route('front.bengkel-detail', $item->id) }}">
                                        {{ $item->name }}
                                    </a>
                                </h5>
                            </div>
                            <div class="jb-list-01-info d-block mb-3">
                                <span class="text-muted mr-2"><i class="lni lni-phone mr-1"></i>{{ $item->telp }}</span>
                                <span class="text-muted mr-2"><i class="lni lni-map-marker mr-1"></i>
                                    {{ $item->alamat }}
                                </span>
                            </div>
                            <div class="jb-list-01-title d-inline">
                                <a href="{{ $item->urlmaps }}" target="_blank">
                                    <span class="mr-2 mb-2 d-inline-flex px-2 py-1 rounded theme-cl theme-bg-light">
                                        <i class="lni lni-map-marker mr-1 "></i> Lihat Alamat
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
        <!-- row -->
    </div>
</section>
<!-- ============================ Main Section End ================================== -->
@endsection

@section('customjs')
@endsection

@section('notification')
@include('layouts.notification')
@endsection