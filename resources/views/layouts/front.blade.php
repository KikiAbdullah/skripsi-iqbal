<!DOCTYPE html>
<html lang="zxx">

    <head>
        <meta charset="utf-8" />
        <meta name="author" content="Themezhub" />
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SISTEM INFORMASI KERUSAKAN SEPEDA MOTOR</title>

        <!-- Custom CSS -->
        <link href="{{ asset('workplex') }}/css/styles.css" rel="stylesheet">

        @yield('customcss')

    </head>

    <body>

        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader"></div>

        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">

            <!-- Start Navigation -->
            <div class="header header-light dark-text">
                <div class="container">
                    <nav id="navigation" class="navigation navigation-landscape">
                        <div class="nav-header">
                            <a class="nav-brand" href="{{ route('front') }}">
                                <img src="{{ asset('workplex') }}/img/logo.png" class="logo" alt="" />
                            </a>
                            <div class="nav-toggle"></div>
                            <div class="mobile_nav">
                                <ul>
                                    <li>
                                        @if (!Auth::check())
                                        <a href="{{ route('login') }}" class="ft-medium">
                                            LOGIN
                                        </a>
                                        @else
                                        <a href="{{ route('siteurl') }}" class="ft-medium">
                                            ADMIN
                                        </a>
                                        @endif

                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="nav-menus-wrapper" style="transition-property: none;">
                            <ul class="nav-menu">
                                <li><a href="{{ route('front') }}">HOME</a></li>
                                <li><a href="{{ route('front.about') }}">ABOUT</a></li>
                                <li><a href="{{ route('front.informasi') }}">INFORMASI</a></li>
                                <li><a href="#">PANDUAN</a></li>
                                <li><a href="{{ route('front.form') }}">DIAGNOSA</a></li>
                            </ul>

                            <ul class="nav-menu nav-menu-social align-to-right">
                                <li>

                                    @if (!Auth::check())
                                    <a href="{{ route('login') }}" class="ft-medium">
                                        LOGIN
                                    </a>
                                    @else
                                    <a href="{{ route('siteurl') }}" class="ft-medium">
                                        ADMIN
                                    </a>
                                    @endif

                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- End Navigation -->
            <div class="clearfix"></div>
            <!-- ============================================================== -->
            <!-- Top header  -->
            <!-- ============================================================== -->

            @yield('content')

            <!-- ============================ Footer Start ================================== -->
            <footer class="light-footer skin-light-footer style-2">
                <div class="footer-bottom br-top">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-12 col-md-12 text-center">
                                <p class="mb-0">© 2023 SISTEM INFORMASI KERUSAKAN SEPEDA MOTOR N-MAX & XMAX | All Rights
                                    Reserverd.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- ============================ Footer End ================================== -->


            <a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>


        </div>
        <!-- ============================================================== -->
        <!-- End Wrapper -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- All Jquery -->
        <!-- ============================================================== -->
        <script src="{{ asset('workplex') }}/js/jquery.min.js"></script>
        <script src="{{ asset('workplex') }}/js/popper.min.js"></script>
        <script src="{{ asset('workplex') }}/js/bootstrap.min.js"></script>
        <script src="{{ asset('workplex') }}/js/slick.js"></script>
        <script src="{{ asset('workplex') }}/js/slider-bg.js"></script>
        <script src="{{ asset('workplex') }}/js/smoothproducts.js"></script>
        <script src="{{ asset('workplex') }}/js/snackbar.min.js"></script>
        <script src="{{ asset('workplex') }}/js/jQuery.style.switcher.js"></script>
        <script src="{{ asset('workplex') }}/js/custom.js"></script>
        <!-- ============================================================== -->
        <!-- This page plugins -->
        <!-- ============================================================== -->

        @yield('customjs')
    </body>

</html>