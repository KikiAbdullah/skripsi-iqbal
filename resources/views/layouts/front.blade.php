<!doctype html>
<html class="no-js" lang="zxx">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Digitek - SEO service HTML Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico in the root directory -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('front-assets') }}/img/favicon.png">

        <!-- CSS here -->
        <link rel="stylesheet" href="{{ asset('front-assets') }}/app/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('front-assets') }}/app/css/meanmenu.min.css">
        <link rel="stylesheet" href="{{ asset('front-assets') }}/app/css/animate.css">
        <link rel="stylesheet" href="{{ asset('front-assets') }}/app/css/swiper-bundle.min.css">
        <link rel="stylesheet" href="{{ asset('front-assets') }}/app/css/slick.css">
        <link rel="stylesheet" href="{{ asset('front-assets') }}/app/css/backtotop.css">
        <link rel="stylesheet" href="{{ asset('front-assets') }}/app/css/magnific-popup.css">
        <link rel="stylesheet" href="{{ asset('front-assets') }}/app/css/fontawesome-pro.css">
        <link rel="stylesheet" href="{{ asset('front-assets') }}/app/css/spacing.css">
        <link rel="stylesheet" href="{{ asset('front-assets') }}/app/css/main.css">
    </head>

    <body>

        <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->

        <!-- Offcanvas area start -->
        <div class="fix">
            <div class="offcanvas__info">
                <div class="offcanvas__wrapper">
                    <div class="offcanvas__content">
                        <div class="offcanvas__top mb-40 d-flex justify-content-between align-items-center">
                            <div class="offcanvas__logo">
                                <a href="index.html">
                                    <img src="{{ asset('front-assets') }}/img/logo/logo.png" alt="logo not found">
                                </a>
                            </div>
                            <div class="offcanvas__close">
                                <button>
                                    <i class="fal fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="offcanvas__search mb-25">
                            <form action="#">
                                <input type="text" placeholder="What are you searching for?">
                                <button type="submit"><i class="far fa-search"></i></button>
                            </form>
                        </div>
                        <div class="mobile-menu fix mb-40"></div>
                        <div class="offcanvas__contact mt-30 mb-20">
                            <h4>Contact Info</h4>
                            <ul>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon mr-15">
                                        <i class="fal fa-map-marker-alt"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a target="_blank"
                                            href="https://www.google.com/maps/place/Dhaka/@23.7806207,90.3492859,12z/data=!3m1!4b1!4m5!3m4!1s0x3755b8b087026b81:0x8fa563bbdd5904c2!8m2!3d23.8104753!4d90.4119873">12/A,
                                            Mirnada City Tower, NYC</a>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon mr-15">
                                        <i class="far fa-phone"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a href="tel:+088889797697">+088889797697</a>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center">
                                    <div class="offcanvas__contact-icon mr-15">
                                        <i class="fal fa-envelope"></i>
                                    </div>
                                    <div class="offcanvas__contact-text">
                                        <a href="tel:+012-345-6789"><span
                                                class="mailto:support@mail.com">support@mail.com</span></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="offcanvas__social">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="offcanvas__overlay"></div>
        <div class="offcanvas__overlay-white"></div>
        <!-- Offcanvas area start -->

        <!-- Header area start -->
        <header>
            <div id="header-sticky" class="header__area header__transparent">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-2 col-6">
                            <div class="header__logo">
                                <a href="index.html">
                                    <img src="{{ asset('front-assets') }}/img/logo/logo.png" alt="logo not found">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-9 d-none d-lg-block">
                            <div class="menu__main-wrapper d-flex justify-content-center">
                                <div class="main-menu d-none d-none d-lg-block">
                                    <nav id="mobile-menu">
                                        <ul>
                                            <li>
                                                <a href="index.html">Home</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('login') }}">Login</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-1 col-6">
                            <div class="header__right d-flex align-items-center justify-content-end">
                                <div class="header__btn d-none d-xl-block">
                                    <a class="border__btn" href="contact.html">Let's Talk</a>
                                </div>
                                <div class="header__toggle d-lg-none">
                                    <a class="sidebar__active" href="javascript:void(0)">
                                        <div class="bar-icon">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>
                                    </a>
                                </div>
                                <div class="header__hamburger d-none d-lg-block ml-60">
                                    <button class="humbager__icon sidebar__active">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="24"
                                            viewBox="0 0 28 24">
                                            <g id="Group_27406" data-name="Group 27406"
                                                transform="translate(-1629 -60)">
                                                <circle id="Ellipse_1144" data-name="Ellipse 1144" cx="2" cy="2" r="2"
                                                    transform="translate(1641 60)" fill="#828282" />
                                                <circle id="Ellipse_1145" data-name="Ellipse 1145" cx="2" cy="2" r="2"
                                                    transform="translate(1653 60)" fill="#828282" />
                                                <circle id="Ellipse_1146" data-name="Ellipse 1146" cx="2" cy="2" r="2"
                                                    transform="translate(1629 60)" fill="#828282" />
                                                <circle id="Ellipse_1147" data-name="Ellipse 1147" cx="2" cy="2" r="2"
                                                    transform="translate(1641 70)" fill="#828282" />
                                                <circle id="Ellipse_1148" data-name="Ellipse 1148" cx="2" cy="2" r="2"
                                                    transform="translate(1653 70)" fill="#828282" />
                                                <circle id="Ellipse_1149" data-name="Ellipse 1149" cx="2" cy="2" r="2"
                                                    transform="translate(1629 70)" fill="#828282" />
                                                <circle id="Ellipse_1150" data-name="Ellipse 1150" cx="2" cy="2" r="2"
                                                    transform="translate(1641 80)" fill="#828282" />
                                                <circle id="Ellipse_1151" data-name="Ellipse 1151" cx="2" cy="2" r="2"
                                                    transform="translate(1653 80)" fill="#828282" />
                                                <circle id="Ellipse_1152" data-name="Ellipse 1152" cx="2" cy="2" r="2"
                                                    transform="translate(1629 80)" fill="#828282" />
                                            </g>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header area end -->

        <!-- Body main wrapper start -->
        <main>
            @yield('content')
        </main>
        <!-- Body main wrapper end -->

        <!-- Back to top start -->
        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
        <!-- Back to top end -->

        <!-- JS here -->
        <script src="{{ asset('front-assets') }}/app/js/vendor/jquery-3.6.0.min.js"></script>
        <script src="{{ asset('front-assets') }}/app/js/vendor/waypoints.min.js"></script>
        <script src="{{ asset('front-assets') }}/app/js/bootstrap.min.js"></script>
        <script src="{{ asset('front-assets') }}/app/js/meanmenu.min.js"></script>
        <script src="{{ asset('front-assets') }}/app/js/swiper-bundle.min.js"></script>
        <script src="{{ asset('front-assets') }}/app/js/slick.min.js"></script>
        <script src="{{ asset('front-assets') }}/app/js/magnific-popup.min.js"></script>
        <script src="{{ asset('front-assets') }}/app/js/backtotop.js"></script>
        <script src="{{ asset('front-assets') }}/app/js/counterup.js"></script>
        <script src="{{ asset('front-assets') }}/app/js/wow.min.js"></script>
        <script src="{{ asset('front-assets') }}/app/js/imagesloaded.pkgd.min.js"></script>
        <script src="{{ asset('front-assets') }}/app/js/isotope.pkgd.min.js"></script>
        <script src="{{ asset('front-assets') }}/app/js/ajax-form.js"></script>
        <script src="{{ asset('front-assets') }}/app/js/main.js"></script>
    </body>

</html>