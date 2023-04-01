@extends('layouts.header')
@section('customcss')
@endsection

@section('customjs')
@endsection

@section('content')
<!-- Page header -->
<div class="page-header">
    <div class="page-header-content container d-lg-flex">
        <div class="d-flex">
            <h4 class="page-title mb-0">
                Home - <span class="fw-normal">Dashboard</span>
            </h4>

            <a href="#page_header"
                class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                data-bs-toggle="collapse">
                <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
            </a>
        </div>

    </div>
</div>
<!-- /page header -->


<!-- Content area -->
<div class="content container pt-0">

    <!-- Blocks with chart -->
    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header d-flex border-bottom-0 pb-1 mb-0">
                    <div>
                        <span class="fw-medium mb-1">Total Diagnosa</span>
                        <h2 class="fw-bold mb-0">{{ $data['total_diagnosa'] }}</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-header d-flex border-bottom-0 pb-1 mb-0">
                    <div>
                        <span class="fw-medium mb-1">Total Kerusakan</span>
                        <h2 class="fw-bold mb-0">{{ $data['total_kerusakan'] }}</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-header d-flex border-bottom-0 pb-1 mb-0">
                    <div>
                        <span class="fw-medium mb-1">Total Gejala</span>
                        <h2 class="fw-bold mb-0">{{ $data['total_gejala'] }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /blocks with chart -->

</div>
<!-- /content area -->
@endsection
@section('notification')
@include('layouts.notification')
@endsection