@extends('frontend.master')

@section('content')
   <link rel="stylesheet" href="{{ asset('public/frontend/assets/css/module-css/03-about.css') }}">
    <link rel="stylesheet" href="{{ asset('public/frontend/assets/css/module-css/09-breadcrumb-section.css') }}">
    <!--Start Breadcrumb Style1-->
    <section class="breadcrumb-style1">
        <div class="breadcrumb-style1__bg" style="background-image: url('{{ asset('public/frontend/assets/images/backgrounds/breadcrumb-v1-bg.jpg') }}');">
        </div>
        <div class="auto-container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-style1__inner text-center">
                        <h2>About Us</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-style1__bottom">
            <div class="auto-container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb-style1__bottom-menu">
                            <ul>
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                                <li>About Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Breadcrumb Style1-->

    <!--Start About Style2-->
    <section class="about-style2 about-style2--about">
        <div class="auto-container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-style2__img">
                        <div class="shape1 rotate-me"><img
                                src={{ asset('public/frontend/assets/images/shapes/thm-shape1.png') }} alt="#"></div>
                        <div class="shape2 float-bob-y"><img
                                src={{ asset('public/frontend/assets/images/shapes/thm-shape1.png') }} alt="#">
                        </div>
                        <div class="about-style2__img-video-box text-center">
                            <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                                <div class="about-style2__img-video-box-icon">
                                    <span class="icon-play-1"></span>
                                    <i class="ripple"></i>
                                </div>
                            </a>
                            <div class="title">
                                <h3>Watch Leader <br> Talk</h3>
                            </div>
                        </div>
                        <div class="inner">
                            <img src={{ asset('public/frontend/assets/images/about/about-page-about-img1.jpg') }}
                                alt="#">
                        </div>
                    </div>
                </div>


                <div class="col-xl-6">
                    <div class="about-style2__content">
                        <div class="sec-title">
                            <div class="sub-title">
                                <h6>About Govarnex</h6>
                            </div>
                            <h2>Welcome & Support <br> To Govarnex City Municipal</h2>
                        </div>
                        <div class="about-style2__content-text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec felis, suscipit mi
                                urna nulla at tincidunt feugiat vulputate. Ante facilisis face pellentesque quis
                                egestas metus, mauris dictum sollicitudin hendrerit quis in magna cras adipiscing
                                posuere augue imperdiet arcu.</p>
                        </div>

                        <div class="about-style2__content-bottom">
                            <div class="inner">
                                <ul>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Improving all types of opportunities</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon">
                                            <span class="icon-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Quick solutions for daily problems</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="icon">
                                            <span class="icon-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Community that grows larger</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <ul class="about-style2--about__social-links">
                                <li><a href="#"><span class="icon-facebook-app-symbol"></span></a></li>
                                <li><a href="#"><span class="icon-twitter"></span></a></li>
                                <li><a href="#"><span class="icon-instagram"></span></a></li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End About Style2-->

    <!--Start Services Style1-->
    <section class="services-style1">
        <div class="shape1"></div>
        <div class="shape2 rotate-me"><img src={{ asset('public/frontend/assets/images/shapes/services-v1-shape1.png') }}
                alt="#"></div>
        <div class="shape3 float-bob-y"><img src={{ asset('public/frontend/assets/images/shapes/services-v1-shape2.png') }}
                alt="#"></div>
        <div class="shape4"><img src={{ asset('public/frontend/assets/images/shapes/services-v1-shape3.png') }}
                alt="#"></div>
        <div class="auto-container">
            <div class="sec-title text-center">
                <div class="sub-title">
                    <h6>EFFICIENCY - OPPORTUNITY</h6>
                </div>
                <h2>City Municipality Services <br>And Departments</h2>
            </div>
            <div class="row">
                <!--Start Services Style1 Single-->
                <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                    <div class="services-style1__single">
                        <div class="services-style1__single-content text-center">
                            <div class="services-style1__single-icon">
                                <span class="icon-Group-5"></span>
                            </div>
                            <div class="services-style1__single-text">
                                <h3><a href="departments-details.html"> Government And <br> Elections</a></h3>
                                <div class="btn-box">
                                    <a href="departments-details.html"><span class="icon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Services Style1 Single-->

                <!--Start Services Style1 Single-->
                <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1000ms">
                    <div class="services-style1__single">
                        <div class="services-style1__single-content text-center">
                            <div class="services-style1__single-icon">
                                <span class="icon-Group-6"></span>
                            </div>
                            <div class="services-style1__single-text">
                                <h3><a href="departments-details.html">Employment And <br> Job Planning</a></h3>
                                <div class="btn-box">
                                    <a href="departments-details.html"><span class="icon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Services Style1 Single-->

                <!--Start Services Style1 Single-->
                <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1000ms">
                    <div class="services-style1__single">
                        <div class="services-style1__single-content text-center">
                            <div class="services-style1__single-icon">
                                <span class="icon-Group-7"></span>
                            </div>
                            <div class="services-style1__single-text">
                                <h3><a href="departments-details.html"> Real Estate And <br> Buildings</a></h3>
                                <div class="btn-box">
                                    <a href="departments-details.html"><span class="icon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Services Style1 Single-->

                <!--Start Services Style1 Single-->
                <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInRight" data-wow-delay="100ms"
                    data-wow-duration="1000ms">
                    <div class="services-style1__single">
                        <div class="services-style1__single-content text-center">
                            <div class="services-style1__single-icon">
                                <span class="icon-Group-16"></span>
                            </div>
                            <div class="services-style1__single-text">
                                <h3><a href="departments-details.html"> Business Tax And <br> Finance</a></h3>
                                <div class="btn-box">
                                    <a href="departments-details.html"><span class="icon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Services Style1 Single-->

                <!--Start Services Style1 Single-->
                <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                    <div class="services-style1__single">
                        <div class="services-style1__single-content text-center">
                            <div class="services-style1__single-icon">
                                <span class="icon-Group-121"></span>
                            </div>
                            <div class="services-style1__single-text">
                                <h3><a href="departments-details.html">Health & Medical <br> Department</a></h3>
                                <div class="btn-box">
                                    <a href="departments-details.html"><span class="icon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Services Style1 Single-->

                <!--Start Services Style1 Single-->
                <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1000ms">
                    <div class="services-style1__single">
                        <div class="services-style1__single-content text-center">
                            <div class="services-style1__single-icon">
                                <span class="icon-Group-9"></span>
                            </div>
                            <div class="services-style1__single-text">
                                <h3><a href="departments-details.html">Finance & Legal <br> Department</a></h3>
                                <div class="btn-box">
                                    <a href="departments-details.html"><span class="icon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Services Style1 Single-->

                <!--Start Services Style1 Single-->
                <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1000ms">
                    <div class="services-style1__single">
                        <div class="services-style1__single-content text-center">
                            <div class="services-style1__single-icon">
                                <span class="icon-Group-10"></span>
                            </div>
                            <div class="services-style1__single-text">
                                <h3><a href="departments-details.html">Park & Recreation <br> Department</a></h3>
                                <div class="btn-box">
                                    <a href="departments-details.html"><span class="icon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Services Style1 Single-->

                <!--Start Services Style1 Single-->
                <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInRight" data-wow-delay="100ms"
                    data-wow-duration="1000ms">
                    <div class="services-style1__single">
                        <div class="services-style1__single-content text-center">
                            <div class="services-style1__single-icon">
                                <span class="icon-Group-11"></span>
                            </div>
                            <div class="services-style1__single-text">
                                <h3><a href="departments-details.html"> Sidewalks, Parking <br> Highways</a></h3>
                                <div class="btn-box">
                                    <a href="departments-details.html"><span class="icon-right-arrow"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Services Style1 Single-->
            </div>
        </div>
    </section>
    <!--End Services Style1-->


    <!--Start Fact Counter Style3-->
    <section class="fact-counter-style3">
        <div class="auto-container">
            <div class="row">
                <!--Start Fact Counter Style3 Single-->
                <div class="col-xl-3 col-lg-3 col-md-6 wow slideInUp animated" data-wow-delay="0.1s"
                    data-wow-duration="1500ms">
                    <div class="fact-counter-style3__single text-center">
                        <div class="counter-box">
                            <h2 class="odometer" data-count="4.2">00</h2>
                            <span class="text">M</span>
                        </div>
                        <div class="title">
                            <p>Total People Lived <br> in Our City</p>
                        </div>
                    </div>
                </div>
                <!--End Fact Counter Style3 Single-->

                <!--Start Fact Counter Style3 Single-->
                <div class="col-xl-3 col-lg-3 col-md-6 wow slideInUp animated" data-wow-delay="0.3s"
                    data-wow-duration="1500ms">
                    <div class="fact-counter-style3__single text-center">
                        <div class="counter-box">
                            <h2 class="odometer" data-count="7">00</h2>
                            <span class="text">km<sup>2</sup></span>
                        </div>
                        <div class="title">
                            <p>Square Kilometres <br> Region Covers</p>
                        </div>
                    </div>
                </div>
                <!--End Fact Counter Style3 Single-->

                <!--Start Fact Counter Style3 Single-->
                <div class="col-xl-3 col-lg-3 col-md-6 wow slideInUp animated" data-wow-delay="0.5s"
                    data-wow-duration="1500ms">
                    <div class="fact-counter-style3__single text-center">
                        <div class="counter-box">
                            <h2 class="odometer" data-count="3">00</h2>
                            <span class="text">rd</span>
                        </div>
                        <div class="title">
                            <p>Largesty City in our <br> Country</p>
                        </div>
                    </div>
                </div>
                <!--End Fact Counter Style3 Single-->

                <!--Start Fact Counter Style3 Single-->
                <div class="col-xl-3 col-lg-3 col-md-6 wow slideInUp animated" data-wow-delay="0.7s"
                    data-wow-duration="1500ms">
                    <div class="fact-counter-style3__single text-center">
                        <div class="counter-box">
                            <h2 class="odometer" data-count="20">00</h2>
                            <span class="text">%</span>
                        </div>
                        <div class="title">
                            <p>Private & domestic <br> garden land</p>
                        </div>
                    </div>
                </div>
                <!--End Fact Counter Style3 Single-->
            </div>
        </div>
    </section>
    <!--End Fact Counter Style3-->

    <!--Start Government Voice -->
    <section class="government-voice clearfix">
        <div class="shape1 rotate-me"><img src={{ asset('public/frontend/assets/images/shapes/thm-shape1.png') }}
                alt="#"></div>
        <div class="auto-container">
            <div class="row">
                <!--Start Government Voice Content-->
                <div class="col-xl-6 col-lg-6">
                    <div class="government-voice__content">
                        <div class="sec-title">
                            <div class="sub-title">
                                <h6>Mayor of govarnex</h6>
                            </div>
                            <h2>Major Voice of City <br> Government</h2>
                        </div>
                        <div class="government-voice__content-inner">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec felis, suscipit mi
                                urna nulla at tincidunt feugiat vulputate. Ante facilisis face pellentesque quis
                                egestas metus, mauris dictum sollicitudin hendrerit quis in magna cras adipiscing
                                posuere augue imperdiet arcu.</p>
                            <ul>
                                <li>
                                    <div class="icon">
                                        <span class="icon-check-mark"></span>
                                    </div>
                                    <div class="text">
                                        <p>Develop the Municipaity</p>
                                    </div>
                                </li>

                                <li>
                                    <div class="icon">
                                        <span class="icon-check-mark"></span>
                                    </div>
                                    <div class="text">
                                        <p>Maintain Financial Integrity</p>
                                    </div>
                                </li>

                                <li>
                                    <div class="icon">
                                        <span class="icon-check-mark"></span>
                                    </div>
                                    <div class="text">
                                        <p>Represent the Public</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--End Government Voice Content-->

                <!--Start Government Voice Img-->
                <div class="col-xl-6 col-lg-6">
                    <div class="government-voice__img">
                        <div class="shape2 float-bob-y"><img
                                src={{ asset('public/frontend/assets/images/shapes/thm-shape1.png') }} alt="#">
                        </div>
                        <div class="inner wow slideInRight" data-wow-delay="500ms" data-wow-duration="2500ms">
                            <img src={{ asset('public/frontend/assets/images/resources/government-voice-img1.png') }}
                                alt="#">
                        </div>
                    </div>
                </div>
                <!--End Government Voice Img-->
            </div>
        </div>

        <!--Start Government Voice Bottom-->
        <div class="government-voice__bottom">
            <div class="auto-container">
                <div class="row">
                    <!--Start Government Voice Bottom Content-->
                    <div class="col-xl-7 col-lg-9">
                        <div class="government-voice__bottom-content">

                            <div class="owl-carousel owl-theme thm-owl__carousel government-voice__bottom-carousel"
                                data-owl-options='{
                                        "loop": true,
                                        "autoplay": true,
                                        "margin": 30,
                                        "nav": false,
                                        "dots": false,
                                        "smartSpeed": 500,
                                        "autoplayTimeout": 10000,
                                        "navText": ["<span class=\"icon-left-arrow-1\"></span>","<span class=\"icon-next\"></span>"],
                                        "responsive": {
                                                "0": {
                                                    "items": 1
                                                },
                                                "768": {
                                                    "items": 2
                                                },
                                                "992": {
                                                    "items": 2
                                                },
                                                "1200": {
                                                    "items": 2
                                                }
                                            }
                                        }'>

                                <!--Start Government Voice Bottom Single-->
                                <div class="government-voice__bottom-single text-center">
                                    <div class="date-box">
                                        <h3><span class="icon-flag"></span> 2017</h3>
                                    </div>
                                    <p>Donec felis suscipit urna <br> nulla at tincidunt.</p>
                                </div>
                                <!--End Government Voice Bottom Single-->

                                <!--Start Government Voice Bottom Single-->
                                <div class="government-voice__bottom-single text-center">
                                    <div class="date-box">
                                        <h3><span class="icon-flag"></span> 2018</h3>
                                    </div>
                                    <p>Donec felis suscipit urna <br> nulla at tincidunt.</p>
                                </div>
                                <!--End Government Voice Bottom Single-->

                                <!--Start Government Voice Bottom Single-->
                                <div class="government-voice__bottom-single text-center">
                                    <div class="date-box">
                                        <h3><span class="icon-flag"></span> 2017</h3>
                                    </div>
                                    <p>Donec felis suscipit urna <br> nulla at tincidunt.</p>
                                </div>
                                <!--End Government Voice Bottom Single-->

                                <!--Start Government Voice Bottom Single-->
                                <div class="government-voice__bottom-single text-center">
                                    <div class="date-box">
                                        <h3><span class="icon-flag"></span> 2018</h3>
                                    </div>
                                    <p>Donec felis suscipit urna <br> nulla at tincidunt.</p>
                                </div>
                                <!--End Government Voice Bottom Single-->
                            </div>
                        </div>
                    </div>
                    <!--End Government Voice Bottom Content-->
                </div>
            </div>
        </div>
        <!--End Government Voice Bottom-->
    </section>
    <!--End Government Voice -->

    <!--Start Team Style1-->
    <section class="team-style1">
        <div class="auto-container">
            <div class="sec-title text-center">
                <div class="sub-title">
                    <h6>Council Members</h6>
                </div>
                <h2>Meet Excellent Council <br> Members</h2>
            </div>
            <div class="row">
                <!--Start Team Style1 Single-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".1s">
                    <div class="team-style1__single">
                        <div class="team-style1__single-img">
                            <div class="team-style1__single-img-inner">
                                <img src={{ asset('public/frontend/assets/images/team/team-v1-img1.jpg') }} alt="#">
                            </div>

                            <ul class="social-links clearfix">
                                <li><a href="mailto:yourmail@email.com"><span class="icon-mail-1"></span></a>
                                </li>
                                <li class="share"><a href="#"><span class="icon-share"></span></a>
                                    <ul class="social-links-inner">
                                        <li><a href="#"><i class="icon-instagram"></i></a></li>
                                        <li><a href="#"><i class="icon-twitter"></i></a>
                                        </li>
                                        <li><a href="#"><i class="icon-facebook-app-symbol"></i></a></li>
                                    </ul>
                                </li>
                                <li><a href="tel:1234567890"><span class="icon-telephone"></span></a></li>
                            </ul>
                        </div>

                        <div class="team-stye1__single-content text-center">
                            <div class="inner-box">
                                <div class="round-bg"></div>
                                <h2><a href="team-details.html">Robert Gates</a></h2>
                                <p>Ambassador</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Team Style1 Single-->

                <!--Start Team Style1 Single-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="team-style1__single">
                        <div class="team-style1__single-img">
                            <div class="team-style1__single-img-inner">
                                <img src={{ asset('public/frontend/assets/images/team/team-v1-img2.jpg') }}
                                    alt="#">
                            </div>

                            <ul class="social-links clearfix">
                                <li><a href="mailto:yourmail@email.com"><span class="icon-mail-1"></span></a>
                                </li>
                                <li class="share"><a href="#"><span class="icon-share"></span></a>
                                    <ul class="social-links-inner">
                                        <li><a href="#"><i class="icon-instagram"></i></a></li>
                                        <li><a href="#"><i class="icon-twitter"></i></a>
                                        </li>
                                        <li><a href="#"><i class="icon-facebook-app-symbol"></i></a></li>
                                    </ul>
                                </li>
                                <li><a href="tel:1234567890"><span class="icon-telephone"></span></a></li>
                            </ul>
                        </div>

                        <div class="team-stye1__single-content text-center">
                            <div class="inner-box">
                                <div class="round-bg"></div>
                                <h2><a href="team-details.html">Nicholas Cage</a></h2>
                                <p>Director</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Team Style1 Single-->

                <!--Start Team Style1 Single-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="team-style1__single">
                        <div class="team-style1__single-img">
                            <div class="team-style1__single-img-inner">
                                <img src={{ asset('public/frontend/assets/images/team/team-v1-img3.jpg') }}
                                    alt="#">
                            </div>

                            <ul class="social-links clearfix">
                                <li><a href="mailto:yourmail@email.com"><span class="icon-mail-1"></span></a>
                                </li>
                                <li class="share"><a href="#"><span class="icon-share"></span></a>
                                    <ul class="social-links-inner">
                                        <li><a href="#"><i class="icon-instagram"></i></a></li>
                                        <li><a href="#"><i class="icon-twitter"></i></a>
                                        </li>
                                        <li><a href="#"><i class="icon-facebook-app-symbol"></i></a></li>
                                    </ul>
                                </li>
                                <li><a href="tel:1234567890"><span class="icon-telephone"></span></a></li>
                            </ul>
                        </div>

                        <div class="team-stye1__single-content text-center">
                            <div class="inner-box">
                                <div class="round-bg"></div>
                                <h2><a href="team-details.html">Keanu Reeves</a></h2>
                                <p>Mayor Assistant</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Team Style1 Single-->

                <!--Start Team Style1 Single-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                    <div class="team-style1__single">
                        <div class="team-style1__single-img">
                            <div class="team-style1__single-img-inner">
                                <img src={{ asset('public/frontend/assets/images/team/team-v1-img4.jpg') }}
                                    alt="#">
                            </div>

                            <ul class="social-links clearfix">
                                <li><a href="mailto:yourmail@email.com"><span class="icon-mail-1"></span></a>
                                </li>
                                <li class="share"><a href="#"><span class="icon-share"></span></a>
                                    <ul class="social-links-inner">
                                        <li><a href="#"><i class="icon-instagram"></i></a></li>
                                        <li><a href="#"><i class="icon-twitter"></i></a>
                                        </li>
                                        <li><a href="#"><i class="icon-facebook-app-symbol"></i></a></li>
                                    </ul>
                                </li>
                                <li><a href="tel:1234567890"><span class="icon-telephone"></span></a></li>
                            </ul>
                        </div>

                        <div class="team-stye1__single-content text-center">
                            <div class="inner-box">
                                <div class="round-bg"></div>
                                <h2><a href="team-details.html">Brendan Fraser</a></h2>
                                <p>Council Member</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Team Style1 Single-->
            </div>
        </div>
    </section>
    <!--End Team Style1-->

    <!--Start Cta Style1-->
    <section class="cta-style1 cta-style1--style2">
        {{-- <div class="cta-style1__bg" style="background-image: url(assets/images/backgrounds/cta-v1-bg.png);"></div> --}}
        <div class="cta-style1__bg" style="background-image: url('{{ asset('public/frontend/assets/images/backgrounds/cta-v1-bg.png') }}');"></div>

        <div class="auto-container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="cta-style1__inner">
                        <div class="cta-style1__title">
                            <div class="sec-title">
                                <div class="sub-title">
                                    <h6>Become Volunteer</h6>
                                </div>
                                <h2>Become a Volunteer, Service to Our <br> City, & Make Difference!</h2>
                            </div>
                        </div>

                        <div class="cta-style1__btn">
                            <a class="btn-one" href="#">
                                <span class="txt">Become Volunteer</span>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Cta Style1-->
@endsection
