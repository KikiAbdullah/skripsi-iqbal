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
                        <li class="breadcrumb-item active theme-cl" aria-current="page">Kenali Kode Kerusakan pada
                            Yamaha Nmax</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- ======================= Top Breadcrubms ======================== -->

<!-- ============================ Blog Detail Start ================================== -->
<section>

    <div class="container">

        <!-- row Start -->
        <div class="row">

            <!-- Blog Detail -->
            <div class="col-12">
                <div class="article_detail_wrapss single_article_wrap format-standard">
                    <div class="article_body_wrap">

                        <div class="article_featured_image text-center">
                            <img class="img-fluid"
                                src="{{ asset('info/1/1.jpg') }}"
                                alt="">
                        </div>

                        <div class="article_top_info">
                            <ul class="article_middle_info">
                                <li><a href="#"><span class="icons"><i class="ti-user"></i></span>by MUHAMMAD IQBAL AL
                                        MULKI</a>
                                </li>
                            </ul>
                        </div>
                        <h2 class="post-title">
                            Kenali Kode Kerusakan pada Yamaha Nmax
                        </h2>
                        <p style="text-align:justify;"> Yamaha Nmax memiliki beberapa kode untuk mengetahui jenis kerusakan yang dialami oleh mesin.

                            Sekedar mengingatkan, Yamaha Nmax menggunakan sistem injeksi untuk menyalurkan bahan bakar
                            ke ruang bakar. Hal ini membuat proses pembakaran mesin lebih sempurna terlebih prosesnya
                            diatur oleh ECU (Electronic Control Unit).
                            ECU berfungsi untuk mengatur semua proses pembakaran mesin. Jika terdapat masalah pada
                            mesin, perangkat elektronik tersebut akan mengirimkan informasi melalui panel instrumen,
                            berupa kode-kode. Kode ini memudahkan para mekanik mendeteksi masalah yang terdapat pada
                            mesin.
                            Namun tidak ada salahnya jika konsumen mengetahui kode-kode kerusakan mesin. Dengan
                            mengetahui kode ini, konsumen bisa mengetahui apa yang terjadi pada kendaraan dan
                            meminimalisir dikelabui oleh oknum mekanik nakal.


                        </p>
                        <div class="article_featured_image text-center">
                            <img class="img-fluid" src="{{ asset('info/1/2.jpg') }}" alt="">
                        </div>
                        <p style="text-align:justify;">Berikut ini kode-kode kerusakan yang ditanamkan pada ECU Yamaha Nmax :</p>

                        <ul>
                            <li>12 : Crankshaft Error</li>
                            <li>13 : Intake air pressure</li>
                            <li>14 : intake air pressure (macet)</li>
                            <li>15 : TPS (Throttle Position Sensor) {short}</li>
                            <li>16 : TPS (Throttle Position Sensor) {rusak}</li>
                            <li>19 : side stand (error)</li>
                            <li>21 : coolant tempat sensor</li>
                            <li>22 : intake temperature sensor</li>
                            <li>24 : 02 sensor</li>
                            <li>37 : ISC (Idle Speed Control) valve</li>
                            <li>39 : Injector</li>
                            <li>42 : speed sensor</li>
                            <li>44 : error Eeprom</li>
                            <li>46 : pengisian tidak normal</li>
                            <li>50 : memory ecu rusak</li>
                            <li>61 : ISC (Idle Speed Control) rusak</li>
                            <li>79 : terlalu banyak udara masuk</li>
                            <li>84 : solenoid VVA (Variable Valve Actuation)</li>   
                        </ul>


                        <p style="text-align:justify;">Intinya melakukan perawatan motor secara berkala meminimalisir terjadinya kerusakan. Untuk
                            diketahui melakukan perawatan di bengkel resmi juga menjadi salah satu jaminan mesin
                            kendaraan tetap prima. Paling tidak garansi masih berlaku jika melakukan perawatan di
                            bengkel resmi.

                            “Kalau service di bengkel resmi, biasanya mekanik langsung tahu masalahnya karena
                            menggunakan YDT (Yamaha Diagnostic Tools). Kode-kode kerusakan ada beberapa konsumen yang
                            sudah tahu, tapi tidak semua bisa memperbaiki,” ucap Slamet Kasianom, Senior Technical PT
                            Yamaha Indonesia Motor Manuacturing (YIMM).

                        </p>
                    </div>
                </div>

            </div>
        </div>
        <!-- /row -->
    </div>

</section>
<!-- ============================ Blog Detail End ================================== -->
@endsection

@section('customjs')
@endsection

@section('notification')
@include('layouts.notification')
@endsection