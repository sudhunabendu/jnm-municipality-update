@extends('frontend.master')

@section('content')

    {{-- <link rel="stylesheet" href="{{ asset('public/frontend/assets/css/module-css/08-blog-section.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('public/frontend/assets/css/module-css/09-breadcrumb-section.css') }}">

    <!--Start Breadcrumb Style1-->
    <section class="breadcrumb-style1">
        <div class="breadcrumb-style1__bg"
            style="background-image: url('{{ asset('public/frontend/assets/images/backgrounds/breadcrumb-v1-bg.jpg') }}');">
        </div>
        <div class="auto-container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-style1__inner text-center">
                        <h2>Gallery</h2>
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
                                <li>Gallery</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Breadcrumb Style1-->

    <!--Start Portfolio Style1-->
    <section class="portfolio-style1 portfolio-style1--grid">
        <div class="auto-container">
            <div class="sec-title text-center">
                <div class="sub-title">
                    <h6>Gallery</h6>
                </div>
                {{-- <h2>Our <br> Gallery</h2> --}}
            </div>

            <div class="row">
                <!--Start Portfolio Style1 Grid Top-->
                <div class="portfolio-style1--grid__top">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="portfolio-style1--grid__menu-box">
                            <ul class="project-filter clearfix post-filter has-dynamic-filters-counter list-unstyled">
                                <li data-filter=".filter-item" class="active"><span class="filter-text">View
                                        All</span></li>
                                <li data-filter=".conference"><span class="filter-text">Conference</span></li>
                                <li data-filter=".celebration"><span class="filter-text">Celebration </span></li>
                                <li data-filter=".turist"><span class="filter-text">Turist</span></li>
                                <li data-filter=".government"><span class="filter-text">Government</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--End Portfolio Style1 Grid Top-->
            </div>

            <div class="row filter-layout masonary-layout">
                <!--Start Portfolio Style1 Single-->

                @if (isset($galleries) && count($galleries) > 0)
                    @foreach ($galleries as $gallery)
                        <div class="col-xl-4 col-lg-6 col-md-6 filter-item government turist">
                            <div class="portfolio-style1__single">
                                <div class="portfolio-style1__single-img">
                                    <div class="inner">
                                        <img src="{{ asset('public/images/gallery_images/' . $gallery->image_path) }}"
                                            alt="#">
                                        <div class="text-box">
                                            <p>{{ $gallery->title }}</p>
                                            {{-- <h2><a href="#">{{ $gallery->title }}</a></h2> --}}
                                        </div>
                                        <div class="portfolio-style1__link">
                                            <a class="img-popup"
                                                href="{{ asset('public/images/gallery_images/' . $gallery->image_path) }}"><span
                                                    class="icon-plus"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <h4 class="text-danger text-center">No Gallery Image Found</h4>
                @endif

                <div class="col-xl-4 col-lg-6 col-md-6 filter-item government turist">
                        <div class="portfolio-style1__single">
                            <div class="portfolio-style1__single-img">
                                <div class="inner">
                                    <img src="{{ asset('public/frontend/assets/images/resources/portfolio-grid-img1.jpg')}}" alt="#">
                                    <div class="text-box">
                                        <p>Metro Train</p>
                                        <h2><a href="#">City Metro Train</a></h2>
                                    </div>
                                    <div class="portfolio-style1__link">
                                        <a class="img-popup"
                                            href="{{ asset('public/frontend/assets/images/resources/portfolio-grid-img1.jpg')}}"><span
                                                class="icon-plus"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <!--End Portfolio Style1 Single-->

                <!--Start Portfolio Style1 Single-->

                <div class="col-xl-4 col-lg-6 col-md-6 filter-item turist conference government">
                        <div class="portfolio-style1__single">
                            <div class="portfolio-style1__single-img">
                                <div class="inner">
                                    <img src="{{ asset('public/frontend/assets/images/resources/portfolio-grid-img2.jpg')}}" alt="#">
                                    <div class="text-box">
                                        <p>Tourist Guide</p>
                                        <h2><a href="#">Main Tourist Spots</a></h2>
                                    </div>
                                    <div class="portfolio-style1__link">
                                        <a class="img-popup"
                                            href="{{ asset('public/frontend/assets/images/resources/portfolio-grid-img2.jpg')}}"><span
                                                class="icon-plus"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <!--End Portfolio Style1 Single-->

                <!--Start Portfolio Style1 Single-->

                <div class="col-xl-4 col-lg-6 col-md-6 conference filter-item government">
                        <div class="portfolio-style1__single">
                            <div class="portfolio-style1__single-img">
                                <div class="inner">
                                    <img src="{{ asset('public/frontend/assets/images/resources/portfolio-grid-img3.jpg')}}" alt="#">
                                    <div class="text-box">
                                        <p>Golf day</p>
                                        <h2><a href="#">Mayor Golf Day</a></h2>
                                    </div>
                                    <div class="portfolio-style1__link">
                                        <a class="img-popup"
                                            href="{{ asset('public/frontend/assets/images/resources/portfolio-grid-img3.jpg')}}"><span
                                                class="icon-plus"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <!--End Portfolio Style1 Single-->

                <!--Start Portfolio Style1 Single-->

                <div class="col-xl-4 col-lg-6 col-md-6 celebration filter-item turist">
                        <div class="portfolio-style1__single">
                            <div class="portfolio-style1__single-img">
                                <div class="inner">
                                    <img src="{{ asset('public/frontend/assets/images/resources/portfolio-grid-img4.jpg')}}" alt="#">
                                    <div class="text-box">
                                        <p>Visit Museum</p>
                                        <h2><a href="#">City Great Museum</a></h2>
                                    </div>
                                    <div class="portfolio-style1__link">
                                        <a class="img-popup"
                                            href="{{ asset('public/frontend/assets/images/resources/portfolio-grid-img4.jpg')}}"><span
                                                class="icon-plus"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <!--End Portfolio Style1 Single-->

                <!--Start Portfolio Style1 Single-->


                <div class="col-xl-4 col-lg-6 col-md-6 conference filter-item government turist">
                        <div class="portfolio-style1__single">
                            <div class="portfolio-style1__single-img">
                                <div class="inner">
                                    <img src="{{ asset('public/frontend/assets/images/resources/portfolio-grid-img5.jpg')}}" alt="#">
                                    <div class="text-box">
                                        <p>Visit Museum</p>
                                        <h2><a href="#">
                                                Town of Maximonia</a></h2>
                                    </div>
                                    <div class="portfolio-style1__link">
                                        <a class="img-popup"
                                            href="{{ asset('public/frontend/assets/images/resources/portfolio-grid-img5.jpg')}}"><span
                                                class="icon-plus"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <!--End Portfolio Style1 Single-->

                <!--Start Portfolio Style1 Single-->

                <div class="col-xl-4 col-lg-6 col-md-6  filter-item government celebration">
                        <div class="portfolio-style1__single">
                            <div class="portfolio-style1__single-img">
                                <div class="inner">
                                    <img src="{{ asset('public/frontend/assets/images/resources/portfolio-grid-img6.jpg')}}" alt="#">
                                    <div class="text-box">
                                        <p>Visit Museum</p>
                                        <h2><a href="#">Ancient Roman Sculpture</a></h2>
                                    </div>
                                    <div class="portfolio-style1__link">
                                        <a class="img-popup"
                                            href="{{ asset('public/frontend/assets/images/resources/portfolio-grid-img6.jpg')}}"><span
                                                class="icon-plus"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <!--End Portfolio Style1 Single-->
            </div>
        </div>
    </section>
    <!--End Portfolio Style1-->


@endsection
