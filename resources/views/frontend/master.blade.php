<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Jaynagar Majilpur Municipality</title>
    <!-- Favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href={{asset("public/frontend/assets/images/favicons/apple-touch-icon.png")}} />
    <link rel="icon" type="image/png" sizes="32x32" href={{asset("public/frontend/assets/images/favicons/favicon-32x32.png")}} />
    <link rel="icon" type="image/png" sizes="16x16" href={{asset("public/frontend/assets/images/favicons/favicon-16x16.png")}} />
    <link rel="manifest" href={{asset("public/frontend/assets/images/favicons/site.webmanifest")}} />
    <meta name="description" content="Jaynagar Majilpur Municipality" />

    <!-- fonts -->
    @include('frontend.layouts.cssLink')
    <style>
        .txt1{
            visibility: hidden;
        }
        /* .txt2{
            visibility: hidden;
        }
        .txt3{
            visibility: hidden;
        } */


    </style>
    <style>
        .carousel-item img {
            width: 100%;
            height: 500px; /* Adjust height as needed */
            object-fit: cover; /* Ensures image covers the area */
        }

        .logo-round {
    width: 120px;      /* must be equal width & height */
    height: 120px;
    border-radius: 50%;
    object-fit: cover; /* prevents image stretching */
}
    </style>
</head>


<body>
    <!-- Start Preloader -->
    <div class="loader-wrap">
        <div class="preloader">
            <div class="preloader-close">x</div>
            <div id="handle-preloader" class="handle-preloader">
                <div class="animation-preloader">
                    <div class="spinner"></div>
                    <div class="txt-loading">
                        <span data-text-preloader="J" class="letters-loading">
                            J
                        </span>
                        <span data-text-preloader="m" class="letters-loading">
                            m
                        </span>
                        <span data-text-preloader="m" class="letters-loading">
                            m
                        </span>
                        <span data-text-preloader="u" class="letters-loading">
                            u
                        </span>
                        <span data-text-preloader="n" class="letters-loading">
                            n
                        </span>
                        <span data-text-preloader="i" class="letters-loading">
                            i
                        </span>
                        <span data-text-preloader="c" class="letters-loading">
                            c
                        </span>
                        <span data-text-preloader="i" class="letters-loading">
                            i
                        </span>
                        <span data-text-preloader="p" class="letters-loading">
                            p
                        </span>
                        <span data-text-preloader="a" class="letters-loading">
                            a
                        </span>
                        <span data-text-preloader="l" class="letters-loading">
                            l
                        </span>
                        <span data-text-preloader="i" class="letters-loading">
                            i
                        </span>
                        <span data-text-preloader="t" class="letters-loading">
                            t
                        </span>
                        <span data-text-preloader="y" class="letters-loading">
                            y
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Preloader -->


    <div class="page-wrapper">

        <!--Start Main Header One-->
        @include('frontend.layouts.header')
        <!--End Main Header One-->

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        @yield('content')

        <!--Start footer area -->
        @include('frontend.layouts.footer')
        <!--End footer area-->

    </div>
    <!-- /.page-wrapper -->

    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler">
                <i class="icon-plus"></i>
            </span>
            <div class="logo-box">
                <a href="index.html" aria-label="logo image">
                    <img src={{asset("public/frontend/assets/images/resources/mobile-nav-logo.png")}} alt="" />
                </a>
            </div>
            <div class="mobile-nav__container"></div>
            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:info@example.com">info@example.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:123456789">444 000 777 66</a>
                </li>
            </ul>
            <div class="mobile-nav__social">
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-facebook-square"></a>
                <a href="#" class="fab fa-pinterest-p"></a>
                <a href="#" class="fab fa-instagram"></a>
            </div>

        </div>
    </div>

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label>
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="icon-magnifying-glass"></i>
                </button>
            </form>
        </div>
    </div>


    <a href="#" data-target="html" class="scroll-to-target scroll-to-top">
        <i class="icon-down-arrow"></i>
    </a>
    @include('frontend.layouts.jsLink')
    @yield('namespace_js')
</body>

</html>
