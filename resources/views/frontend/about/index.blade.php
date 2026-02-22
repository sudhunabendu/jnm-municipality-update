@extends('frontend.master')

@section('content')
    <link rel="stylesheet" href="{{ asset('public/frontend/assets/css/module-css/03-about.css') }}">
    <link rel="stylesheet" href="{{ asset('public/frontend/assets/css/module-css/09-breadcrumb-section.css') }}">
    <!--Start Breadcrumb Style1-->
    <section class="breadcrumb-style1">
        {{-- <div class="breadcrumb-style1__bg" style="background-image: url('{{ asset('public/frontend/assets/images/backgrounds/breadcrumb-v1-bg.jpg') }}');">
        </div> --}}
        @foreach ($banners as $banner)
            @php
                $images = json_decode($banner->images, true);
                $firstImage = !empty($images) && is_array($images) ? $images[0] ?? null : null;
            @endphp
            @if ($firstImage)
                <div class="breadcrumb-style1__bg"
                    style="background-image: url('{{ asset('public/images/banner_images/' . $firstImage) }}');">
                </div>
            @endif
        @endforeach
        <div class="auto-container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-style1__inner text-center">
                        {{-- <h2>About Us</h2> --}}
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
                        {{-- <div class="about-style2__img-video-box text-center">
                            <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                                <div class="about-style2__img-video-box-icon">
                                    <span class="icon-play-1"></span>
                                    <i class="ripple"></i>
                                </div>
                            </a>
                            <div class="title">
                                <h3>Watch Leader <br> Talk</h3>
                            </div>
                        </div> --}}
                        <div class="inner">
                            {{-- <img src={{ asset('public/frontend/assets/images/about/about-page-about-img1.jpg') }}
                                alt="#"> --}}
                            <img src={{ asset('public/images/chaiman.png') }} alt="#">
                        </div>
                    </div>
                </div>


                <div class="col-xl-6">
                    <div class="about-style2__content">
                        <div class="sec-title">
                            <div class="sub-title">
                                <h6>About</h6>
                            </div>
                            <h2>Welcome & Support <br> To Jaynagar Majilpur Municipality</h2>
                            {{--  {{$total}} {{$today}} --}}
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

                            {{-- <ul class="about-style2--about__social-links">
                                <li><a href="#"><span class="icon-facebook-app-symbol"></span></a></li>
                                <li><a href="#"><span class="icon-twitter"></span></a></li>
                                <li><a href="#"><span class="icon-instagram"></span></a></li>
                            </ul> --}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End About Style2-->

    <!-- Start Chairman History Table -->
    <section class="chairman-history-section" style="padding: 80px 0; background-color: #c7eefb;">
        <div class="auto-container">
            <div class="sec-title text-center mb-5">
                {{-- <h2>Chairman History</h2> --}}
                <h3>Historical List of Chairmen of Jaynagar Majilpur Municipality</h3>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-hover chairman-table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">SI No</th>
                            <th scope="col">Name of the Chairman</th>
                            <th scope="col">Period</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Sukumar Halder</td>
                            <td>(2022–Present)</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Sujit Sarkhel</td>
                            <td>(2015–2022)</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Farida Begum Shaikh</td>
                            <td>(2010–2015)</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Prashanta Sarkhel</td>
                            <td>(2005–2010)</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Jalal Uddin Khan</td>
                            <td>(2002–2005)</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Prashanta Sarkhel</td>
                            <td>(1981–2002)</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Monoranjan Dutta</td>
                            <td>(1968–1981)</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Prasun Kumar Ghosh</td>
                            <td>(1966–1968)</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Sudhir Krishna Dutta</td>
                            <td>(1964–1966)</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>Hirendra Nath Mitra</td>
                            <td>(1959–1964)</td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>Birendra Nath Bhattacharya</td>
                            <td>(1958–1959)</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>Sudhir Krishna Dutta</td>
                            <td>(1939–1958)</td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td>Paramananda Dutta</td>
                            <td>(1936–1939)</td>
                        </tr>
                        <tr>
                            <td>14</td>
                            <td>Rampada Chatterjee</td>
                            <td>(1935–1936)</td>
                        </tr>
                        <tr>
                            <td>15</td>
                            <td>Bhutnath Chakraborty</td>
                            <td>(1929–1935)</td>
                        </tr>
                        <tr>
                            <td>16</td>
                            <td>Surendra Nath Mitra</td>
                            <td>(1924–1929)</td>
                        </tr>
                        <tr>
                            <td>17</td>
                            <td>Nakuleshwar Basu</td>
                            <td>(1919–1924)</td>
                        </tr>
                        <tr>
                            <td>18</td>
                            <td>Khetra Nath Mitra</td>
                            <td>(1916–1919)</td>
                        </tr>
                        <tr>
                            <td>19</td>
                            <td>Bipin Bihari Dey</td>
                            <td>(1904–1916)</td>
                        </tr>
                        <tr>
                            <td>20</td>
                            <td>Binoy Krishna Dutta</td>
                            <td>(1903–1904)</td>
                        </tr>
                        <tr>
                            <td>21</td>
                            <td>Biraj Krishna Dutta</td>
                            <td>(1902–1903)</td>
                        </tr>
                        <tr>
                            <td>22</td>
                            <td>Jogindra Nath Mitra</td>
                            <td>(1900–1902)</td>
                        </tr>
                        <tr>
                            <td>23</td>
                            <td>Ananda Chandra Ghosh</td>
                            <td>(1886–1900)</td>
                        </tr>
                        <tr>
                            <td>24</td>
                            <td>Haridas Dutta</td>
                            <td>(1882–1886)</td>
                        </tr>
                        <tr>
                            <td>25</td>
                            <td>Harananda Vidyasagar</td>
                            <td>(1869–1882)</td>
                        </tr>
                    </tbody>

                </table>
            </div>
        </div>
    </section>
    <!-- End Chairman History Table -->

    <!--Start Fact Counter Style3-->
    <section class="fact-counter-style3">
        <div class="auto-container">
            <div class="row">
                <!--Start Fact Counter Style3 Single-->
                <div class="col-xl-3 col-lg-3 col-md-6 wow slideInUp animated" data-wow-delay="0.1s"
                    data-wow-duration="1500ms">
                    <div class="fact-counter-style3__single text-center">
                        <div class="counter-box">
                            <h2 class="odometer" data-count="25.9">00</h2>
                            <span class="text">K</span>
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
                            <h2 class="odometer" data-count="5.85">00</h2>
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
@endsection
