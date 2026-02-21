<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Dashboard | JNM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    {{-- <link rel="shortcut icon" href="assets/images/favicon.ico"> --}}

    <link href={{ asset('public/dason/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css') }}
        rel="stylesheet" type="text/css" />
    <link href={{ asset('public/dason/css/preloader.min.css') }} rel="stylesheet" type="text/css" />
    <link href={{ asset('public/dason/css/bootstrap.min.css') }} id="bootstrap-style" rel="stylesheet"
        type="text/css" />
    <link href={{ asset('public/dason/css/icons.min.css') }} rel="stylesheet" type="text/css" />
    <link href={{ asset('public/dason/css/app.min.css') }} id="app-style" rel="stylesheet" type="text/css" />
    <link href={{ asset('public/dason/css/style.css') }} rel="stylesheet" type="text/css" />

    <style>
        .navbar-header,
        .navbar-brand-box {
            height: 60px;
        }

        .vertical-menu {
            top: 62px;
        }

        .vertical-menu {
            width: 228px;
        }
    </style>

</head>

<body data-topbar="dark">

    <div id="layout-wrapper">

        @include('admin.common.topbar')

        @include('admin.common.sidebar')

        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    @yield('content')

                </div>
            </div>

            {{-- <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © Dason.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Design & Develop by <a href="#!" class="text-decoration-underline">Themesbrand</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer> --}}
        </div>

    </div>


    @include('admin.common.rightbar')

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <script src={{ asset('public/dason/libs/jquery/jquery.min.js') }}></script>
    <script src={{ asset('public/dason/libs/bootstrap/js/bootstrap.bundle.min.js') }}></script>
    <script src={{ asset('public/dason/libs/metismenu/metisMenu.min.js') }}></script>
    <script src={{ asset('public/dason/libs/simplebar/simplebar.min.js') }}></script>
    <script src={{ asset('public/dason/libs/node-waves/waves.min.js') }}></script>
    <script src={{ asset('public/dason/libs/feather-icons/feather.min.js') }}></script>
    <script src={{ asset('public/dason/libs/pace-js/pace.min.js') }}></script>
    {{-- <script src={{asset("public/dason/libs/apexcharts/apexcharts.min.js")}}></script> --}}
    <script src={{ asset('public/dason/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js') }}></script>
    <script src={{ asset('public/dason/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js') }}>
    </script>
    <script src={{ asset('public/dason/js/pages/allchart.js') }}></script>
    {{-- <script src={{asset("public/dason/js/pages/dashboard.init.js")}}></script> --}}
    <script src={{ asset('public/dason/js/app.js') }}></script>
    <script src="{{ asset('public/dason/js/jquery.alphanum.js')}}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    @yield('bannerJS')
    @yield('roleJS')
    @yield('news_eventsJS')
    @yield('galleryJS')
</body>

</html>
