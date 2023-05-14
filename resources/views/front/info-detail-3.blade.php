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
                        <li class="breadcrumb-item active theme-cl" aria-current="page">Ada Indikator Oli di Yamaha NMAX
                            Terbaru, Ini Fungsi dan Cara Pakainya
                        </li>
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
                            <img class="img-fluid" src="{{ asset('info/3/1.jpg') }}" alt="">
                        </div>

                        <div class="article_top_info">
                            <ul class="article_middle_info">
                                <li><a href="#"><span class="icons"><i class="ti-user"></i></span>by MUHAMMAD IQBAL AL
                                        MULKI</a>
                                </li>
                            </ul>
                        </div>
                        <h2 class="post-title">
                            Ada Indikator Oli di Yamaha NMAX Terbaru, Ini Fungsi dan Cara Pakainya
                        </h2>
                        <p style="text-align: justify; ">Meski sudah lengkap dijelaskan di buku manual, banyak pemilik
                            Yamaha NMAX terbaru yang awam fitur-fiturnya.

                            Nah, fitur yang banyak dicari fungsinya oleh pemilik Yamaha NMAX produksi 2020-sekarang,
                            adalah Oil Trip.

                            Disebut Oil Trip, karena indikator ini punya tulisan OIL hitam di pojok kiri atas, yang
                            muncul di Multi Information Display (MID).

                            Sesuai namanya, MID menampilkan banyak informasi soal motor, yang berada di bagian bawah
                            speedometer.

                            <br>
                            <br>

                            Mulai dari Trip Meter 1 & 2, F/Eco untuk informasi konsumsi bensin, sampai informasi kontrol
                            traksi TCS.

                            Cara merubah informasinya, dengan cara menekan tombol Menu yang bentuknya tuas di setang
                            sebelah kiri.

                            Informasi Oil Trip sendiri, muncul setelah informasi TCS, dimana muncul tulisan OIL di pojok
                            kiri atas.

                            Nah, informasi Oil Trip ini berfungsi untuk memberi tahu pemilik motor, kapan waktu yang
                            disarankan untuk ganti oli.

                        </p>

                        <div class="article_featured_image text-center">
                            <img class="img-fluid" src="{{ asset('info/3/2.jpg') }}" alt="">
                        </div>
                        <p style="text-align: justify; ">
                            Jadi, Yamaha NMAX direkomendasikan ganti oli mesin tiap 4.000 km.

                            Namun buat yang motornya beli baru dari 0 km, indikator Oil Change akan berkedip di 1.000
                            km.

                            Kenapa muncul duluan di 1.000 km, agar mesin bersih dari gram besi saat inreyen, atau proses
                            melancarkan mesin motor saat baru.

                            Selanjutnya indikator Oil Trip akan berkedip, setiap 4.000 km untuk mengingatkan pemilik
                            Yamaha NMAX buat ganti oli.

                            Selesai ganti oli, indikator Oil Trip bisa di-reset tripmeter dan dimatikan kedipannya,
                            dengan cara menekan tombol Menu selama 5-10 detik.

                            <br><br>

                            Nah, pasti ada pertanyaan, kenapa Yamaha NMAX butuh indikator Oil Trip.

                            Padahal pemilik Yamaha NMAX, bisa membaca jarak tempuh motor via Odometer atau Trip Meter.

                            <br><br>

                            Biar metode itu bisa dipakai, tentu saja tidak semudah pakai Oil Trip, yang punya trip meter
                            khusus, serta indikator OLI yang berkedip.

                            Ditambah lagi, Yamaha NMAX terbaru dilengkapi Y-Connect, yang menghubungkan motor dengan
                            smartphone atau HP.

                            Berkat Y-Connect, pemilik Yamaha NMAX bisa memantau kondisi motor, serta perawatan mesin
                            seperti kapan waktu ganti oli.

                            Tidak hanya oli, Yamaha NMAX terbaru juga punya informasi soal voltmeter, yang memberi tahu
                            tegangan aki.

                            Lalu ada juga informasi V-Belt Trip, yang mirip dengan Oil Trip namun kedipannya muncul
                            setiap 25.000 km, untuk penggantian V-Belt.
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