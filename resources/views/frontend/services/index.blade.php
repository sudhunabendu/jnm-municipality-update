@extends('frontend.master')

@section('content')
    <link rel="stylesheet" href="{{ asset('public/frontend/assets/css/module-css/03-about.css') }}">
    <link rel="stylesheet" href="{{ asset('public/frontend/assets/css/module-css/09-breadcrumb-section.css') }}">

    <!--Start Breadcrumb Style1-->
    <section class="breadcrumb-style1">
        {{-- <div class="breadcrumb-style1__bg" style="background-image: url({{asset('public/frontend/assets/images/backgrounds/breadcrumb-v1-bg.jpg')}});"> --}}
        <div class="breadcrumb-style1__bg"
            style="background-image: url('{{ asset('public/frontend/assets/images/backgrounds/breadcrumb-v1-bg.jpg') }}');">
        </div>
        <div class="auto-container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-style1__inner text-center">
                        <h2>Our Services</h2>
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
                                <li>Our Services</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Breadcrumb Style1-->

    <!--Start Services Page-->
    <section class="services-page">
        <div class="shape1"><img src="{{asset('public/frontend/assets/images/shapes/services-page-shape1.png')}}" alt="#"></div>
        <div class="auto-container">
            <div class="sec-title text-center">
                <div class="sub-title">
                    <h6>Services</h6>
                </div>
                <h2>Find Goverment Services <br> and Information</h2>
            </div>

            <div class="row">
                <!--Start Services Page Single-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="services-page__single">
                        <div class="services-page__single-icon">
                            <span class="icon-Group-2"></span>
                        </div>
                        <div class="services-page__single-inner">
                            <h3><a href="departments-details.html">Trash & Recycling</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tellus auctor.</p>
                            <div class="btn-box">
                                <a href="departments-details.html"><span class="icon-right-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Services Page Single-->

                <!--Start Services Page Single-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="services-page__single">
                        <div class="services-page__single-icon">
                            <span class="icon-Group-12"></span>
                        </div>
                        <div class="services-page__single-inner">
                            <h3><a href="departments-details.html">Fishing & Boating</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tellus auctor.</p>
                            <div class="btn-box">
                                <a href="departments-details.html"><span class="icon-right-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Services Page Single-->

                <!--Start Services Page Single-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="services-page__single">
                        <div class="services-page__single-icon">
                            <span class="icon-Group-13"></span>
                        </div>
                        <div class="services-page__single-inner">
                            <h3><a href="departments-details.html">Taxis & Private</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tellus auctor.</p>
                            <div class="btn-box">
                                <a href="departments-details.html"><span class="icon-right-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Services Page Single-->

                <!--Start Services Page Single-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="services-page__single">
                        <div class="services-page__single-icon">
                            <span class="icon-Group-14"></span>
                        </div>
                        <div class="services-page__single-inner">
                            <h3><a href="departments-details.html"> Building Sanction</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tellus auctor.</p>
                            <div class="btn-box">
                                <a href="departments-details.html"><span class="icon-right-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Services Page Single-->

                <!--Start Services Page Single-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="services-page__single">
                        <div class="services-page__single-icon">
                            <span class="icon-Group-15"></span>
                        </div>
                        <div class="services-page__single-inner">
                            <h3><a href="departments-details.html">Birth Cirtificate</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tellus auctor.</p>
                            <div class="btn-box">
                                <a href="departments-details.html"><span class="icon-right-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Services Page Single-->

                <!--Start Services Page Single-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="services-page__single">
                        <div class="services-page__single-icon">
                            <span class="icon-Group-16"></span>
                        </div>
                        <div class="services-page__single-inner">
                            <h3><a href="departments-details.html">Tax & Finance</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tellus auctor.</p>
                            <div class="btn-box">
                                <a href="departments-details.html"><span class="icon-right-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Services Page Single-->

                <!--Start Services Page Single-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="services-page__single">
                        <div class="services-page__single-icon">
                            <span class="icon-Group-17"></span>
                        </div>
                        <div class="services-page__single-inner">
                            <h3><a href="departments-details.html">Park & Recreation
                                </a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tellus auctor.</p>
                            <div class="btn-box">
                                <a href="departments-details.html"><span class="icon-right-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Services Page Single-->

                <!--Start Services Page Single-->
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="services-page__single">
                        <div class="services-page__single-icon">
                            <span class="icon-Group-11"></span>
                        </div>
                        <div class="services-page__single-inner">
                            <h3><a href="departments-details.html">Sidewalks, Parking
                                </a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tellus auctor.</p>
                            <div class="btn-box">
                                <a href="departments-details.html"><span class="icon-right-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Services Page Single-->
            </div>
        </div>
    </section>
    <!--End Services Page-->


    <!--Start Newsletter Style1-->
    <section class="newsletter-style1">
        <div class="auto-container">
            <div class="row">
                <!--Start Newsletter Style1 Title-->
                <div class="col-xl-4">
                    <div class="newsletter-style1__title">
                        <h2>Subscribe To Our <br> Newsletter</h2>
                    </div>
                </div>
                <!--End Newsletter Style1 Title-->

                <!--Start Newsletter Style1 Form-->
                <div class="col-xl-8">
                    <div class="newsletter-style1__form">
                        <form action="https://mehedi.asiandevelopers.com/govarnex-demo/assets/inc/sendemail.php"
                            class="comment-one__form contact-form-validated" novalidate="novalidate">
                            <div class="newsletter-style1__form-inner">
                                <ul>
                                    <li>
                                        <div class="comment-form__input-box">
                                            <input type="text" placeholder="Your name" name="name">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="comment-form__input-box">
                                            <input type="email" placeholder="Your email" name="email">
                                        </div>
                                    </li>
                                </ul>
                                <div class="newsletter-style1__form-btn">
                                    <button type="submit" class="btn-one newsletter-style1__form-btn">
                                        <span class="txt">Subscribe Now</span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!--End Newsletter Style1 Form-->
            </div>
        </div>
    </section>
    <!--End Newsletter Style1-->
@endsection
