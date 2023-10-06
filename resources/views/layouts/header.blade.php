<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('tittle')</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/favicon.png')}}">

    <!-- CSS
    ============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/vendor/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendor/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendor/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendor/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendor/base.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/plugins.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
@yield('style')
</head>

<body>
@include('sweetalert::alert')
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])

<div class="main-wrapper">
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>
    <div id="my_switcher" class="my_switcher">
        <ul>
            <li>
                <a href="javascript: void(0);" data-theme="light" class="setColor light">
                    <span title="Light Mode">Light</span>
                </a>
            </li>
            <li>
                <a href="javascript: void(0);" data-theme="dark" class="setColor dark">
                    <span title="Dark Mode">Dark</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- Start Header -->
    <header class="header axil-header header-style-3  header-light header-sticky ">
        <div class="header-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <div class="header-top-bar d-flex flex-wrap align-items-center justify-content-center justify-content-md-start">
                            <ul class="header-top-date liststyle d-flex flrx-wrap align-items-center mr--20">
                                <li><a href="#">{{\Carbon\Carbon::now()}}</a></li>
                            </ul>
                            <ul class="header-top-nav liststyle d-flex flrx-wrap align-items-center">
{{--                                @yield('page')--}}
                                <li><a href="#">Advertisement</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4 col-sm-12">
                        <ul class="social-share-transparent md-size justify-content-center justify-content-md-end">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-middle">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="logo">
                            <a href="#">
                                <img class="dark-logo" src="{{asset('assets/images/logo/logo-black.png')}}" alt="Logo Images">
                                <img class="light-logo" src="{{asset('assets/images/logo/logo-white2.png')}}" alt="Logo Images">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8 col-sm-6">
                        <div class="banner-add text-end">
                            <a href="#">
                                <img src="{{asset('assets/images/others/add-01.png')}}" alt="Add images">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-bottom">
            <div class="container">
                <div class="row justify-content-center justify-content-xl-between align-items-center">
                    <div class="col-xl-7 d-none d-xl-block">
                        <div class="mainmenu-wrapper">
                            <nav class="mainmenu-nav">
                                <!-- Start Mainmanu Nav -->
                                <ul class="mainmenu">
                                    <li ><a href="{{route('home')}}">Home</a></li>

                                    @foreach($category as $cat)
                                    <li><a href="{{route('cat', $cat['id'])}}">{{$cat['name']}}</a></li>
                                    @endforeach
                                </ul>
                                <!-- End Mainmanu Nav -->
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-5">
                        <div class="header-search d-flex align-items-center justify-content-xl-end justify-content-center">
                            <form class="header-search-form d-sm-block d-none">
                                <div class="axil-search form-group">
                                    <button type="submit" class="search-button"><i class="fal fa-search"></i></button>
                                    <input type="text" class="form-control" placeholder="Search">
                                </div>
                            </form>
                            <div class="mobile-search-wrapper d-sm-none d-block">
                                <button class="search-button-toggle"><i class="fal fa-search"></i></button>
                                <form class="header-search-form">
                                    <div class="axil-search form-group">
                                        <button type="submit" class="search-button"><i class="fal fa-search"></i></button>
                                        <input type="text" class="form-control" placeholder="Search">
                                    </div>
                                </form>
                            </div>
                            <ul class="metabar-block">
{{--                                <li class="icon"><a href="#"><i class="fas fa-bookmark"></i></a></li>--}}
{{--                                <li class="icon"><a href="#"><i class="fas fa-bell"></i></a></li>--}}
                                <li><a href="#"><img src="{{asset('assets/images/others/author.png')}}" alt="Author Images"></a></li>
                            </ul>
                            <!-- Start Hamburger Menu  -->
                            <div class="hamburger-menu d-block d-xl-none">
                                <div class="hamburger-inner">
                                    <div class="icon"><i class="fal fa-bars"></i></div>
                                </div>
                            </div>
                            <!-- End Hamburger Menu  -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Start Header -->

    <!-- Start Mobile Menu Area  -->
    <div class="popup-mobilemenu-area">
        <div class="inner">
            <div class="mobile-menu-top">
                <div class="logo">
                    <a href="{{route('home')}}">
                        <img class="dark-logo" src="{{asset('assets/images/logo/logo-black.png')}}" alt="Logo Images">
                        <img class="light-logo" src="{{asset('assets/images/logo/logo-white2.png')}}" alt="Logo Images">
                    </a>
                </div>
                <div class="mobile-close">
                    <div class="icon">
                        <i class="fal fa-times"></i>
                    </div>
                </div>
            </div>
            <ul class="mainmenu">
                <li ><a href="{{route('home')}}">Home</a></li>

                @foreach($category as $cat)
                    <li><a href="{{route('cat', $cat['id'])}}">{{$cat['name']}}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
    <!-- End Mobile Menu Area  -->
    @yield('content')
</div>

<!-- JS
============================================ -->
<!-- Modernizer JS -->
<script src="{{asset('assets/js/vendor/modernizr.min.js')}}"></script>

<!-- jQuery JS -->
<script src="{{asset('assets/js/vendor/jquery.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{asset('assets/js/vendor/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/slick.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/tweenmax.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/js.cookie.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery.style.switcher.js')}}"></script>


<!-- Main JS -->
<script src="{{asset('assets/js/main.js')}}"></script>
</body>
