@extends('layouts.front')

@section('customcss')
@endsection

@section('content')

<!-- Hero area stat -->
<section class="hero__area hero__hight d-flex align-items-center p-relative">
    <div class="hero__shape-3">
        <img src="{{ asset('front-assets') }}/img/shape/hero-shape-3.png" alt="image not found">
    </div>
    <div class="hero__shape-4">
        <img src="{{ asset('front-assets') }}/img/shape/hero-shape-4.png" alt="image not found">
    </div>
    <div class="container-fluid">
        <div class="hero__main-wrapper">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="hero__content-wrapper">
                        <div class="hero__content mb-60">
                            <h2 class="wow fadeInUp" data-wow-delay=".4s">Cek Kerusakan Motormu Sekarang!</h2>
                            <p class="wow fadeInUp" data-wow-delay=".6s">Memberi kemudahan bagi pengguna sepeda motor
                                dalam
                                mendiagnosa kerusakan sepeda motor secara mandiri</p>
                        </div>
                        <div class="hero__search">
                            <a class="border__btn" href="contact.html">Cek Sekarang!</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="hero__thumb-wrapper mb-60">
                        <div class="hero__thumb w-img">
                            <img src="{{ asset('front-assets') }}/img/hero/hero-thumb-1.png" alt="image not found">
                        </div>
                        <div class="hero__shape-1">
                            <img class="parallaxed" src="{{ asset('front-assets') }}/img/shape/dot.png"
                                alt="image not found">
                        </div>
                        <div class="hero__shape-2">
                            <img class="parallaxed" src="{{ asset('front-assets') }}/img/shape/dot.png"
                                alt="image not found">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero area end -->

<!-- Features area start -->
<section class="features__area p-relative features-bg pt-120 pb-35">
    <div class="features__pattern">
        <img src="{{ asset('front-assets') }}/img/shape/features-shape.png" alt="image not found">
    </div>
    <div class="container">
        <div class="row wow fadeInUp" data-wow-delay=".3s">
            <div class="col-xl-6 col-lg-6">
                <div class="features__thumb-wrapper mb-60">
                    <div class="features__thumb">
                        <img src="{{ asset('front-assets') }}/img/features/1.png" alt="image not found">
                    </div>
                    <div class="features__cercle-1"></div>
                    <div class="features__cercle-2"></div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="features__content-wrapper">
                    <div class="section__title-wrapper mb-10">
                        <span class="section__subtitle">
                            <span>featured</span> campaign
                        </span>
                        <h2 class="section__title">
                            Getting started with an <span class="down__mark-line">SEO</span> campaign
                        </h2>
                    </div>
                    <div class="bd-faq__wrapper mb-60">
                        <div class="bd-faq__accordion" data-aos="fade-left" data-aos-duration="1000">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            Determine Your SEO Marketing Budget
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>From finance, retail, and travel, to social media,
                                                cybersecurity, ad
                                                tech, & more, market leaders are leveraging web data to
                                                maintain
                                                their advantage. Discover how it can work for you.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            Marketing Goals and Current Site Standing
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>From finance, retail, and travel, to social media,
                                                cybersecurity, ad
                                                tech, & more, market leaders are leveraging web data to
                                                maintain
                                                their advantage. Discover how it can work for you.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            Marketing Media Collection
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>From finance, retail, and travel, to social media,
                                                cybersecurity, ad
                                                tech, & more, market leaders are leveraging web data to
                                                maintain
                                                their advantage. Discover how it can work for you.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                            aria-expanded="false" aria-controls="collapseFour">
                                            Optimization Analysis, Hold On Tight
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse"
                                        aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>From finance, retail, and travel, to social media,
                                                cybersecurity, ad
                                                tech, & more, market leaders are leveraging web data to
                                                maintain
                                                their advantage. Discover how it can work for you.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Features area end -->

<!-- Footer area start -->
<footer>
    <section class="footer__border grey__bg pt-115 pb-60">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__widget footer__col-1 mb-55">
                        <div class="footer__title">
                            <h3>COMPANY</h3>
                        </div>
                        <div class="footer__link">
                            <ul>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Resources</a></li>
                                <li><a href="#">Free SEO Tools</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__widget footer__col-2 mb-55">
                        <div class="footer__title">
                            <h3>Services</h3>
                        </div>
                        <div class="footer__link">
                            <ul>
                                <li><a href="#">Search Engine Optimization</a></li>
                                <li><a href="#">PPC Management Services</a></li>
                                <li><a href="#">Social Media Management</a></li>
                                <li><a href="#">Link Building Services</a></li>
                                <li><a href="#">Conversion Optimization</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__widget footer__col-3 mb-55">
                        <div class="footer__title">
                            <h3>Explore Seofest</h3>
                        </div>
                        <div class="footer__link">
                            <ul>
                                <li><a href="#">Account</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Affilitate Program</a></li>
                                <li><a href="#">Product Design</a></li>
                                <li><a href="#"> Web Design Services</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__widget mb-55">
                        <div class="footer__title">
                            <h3>Contact</h3>
                        </div>
                        <div class="footer__link">
                            <ul>
                                <li><a href="#">Boise, Idaho Office</a></li>
                                <li><a href="#">1150 W. State Street, Suite 240,</a></li>
                                <li><a href="#">Boise, Idaho 83702 USA</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="footer__copyright grey-bg">
        <div class="container">
            <div class="copyright__inner">
                <div class="copyright__logo">
                    <a href="index.html"><img src="{{ asset('front-assets') }}/img/logo/logo.png"
                            alt="logo not found"></a>
                </div>
                <div class="copyright__text">
                    <p>Copyright © 2023 Digitek All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer area end -->
@endsection

@section('customjs')
@endsection

@section('notification')
@include('layouts.notification')
@endsection