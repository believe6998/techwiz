<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Smart Traffic') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('/css/mystyle.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        #navbarDropdown:hover{
            color: #92C800;
        }
    </style>
    <style>
        body {
            padding: 0;
            margin: 0;
        }


        #map {
            height: 92vh;
            width: 100%;
        }
        .floating-panel {
            position: absolute;
            top: 20px;
            left: 5%;
            z-index: 5;
            background-color: #fff;
            padding: 5px;
            border: 1px solid #999;
            text-align: center;
            font-family: 'Roboto','sans-serif';
            line-height: 30px;
            padding-left: 10px;
        }
        .floating-panel {
            margin-left: -52px;
        }
    </style>
</head>
<body>
<header class="header-area">
    <!-- Top Header Area Start -->
    <div class="top-header-area">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-6">
                    <div class="top-header-content">
                        <a href="#"><i class="icon_mail"></i> <span>t1808a@fpt.edu.vn</span></a>
                        <a href="#"><i class="icon_phone"></i> <span>(12) 345 6789</span></a>
                    </div>
                </div>
                <div class="col-6">
                    <div class="top-header-content">
                        <!-- Top Social Area -->
                        <div class="top-social-area ml-auto">
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Header Area End -->

    <!-- Main Header Start -->
    <div class="main-header-area animated">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="rehomesNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="./index.html"><img src="{{asset('/img/core-img/logo-1.png')}}" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">
                        <!-- Menu Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>
                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul id="nav" style="font-size:45px;">
                                <li class="active"><a href="./index.html">Home</a></li>
                                <li><a href="#">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="./blog.html">Blog</a></li>
                                        <li><a href="./contact.html">Contact</a></li>
                                    </ul>
                                </li>
                                <li><a href="./about.html">About Us</a></li>
                                <li><a href="#">Notification</a></li>
                            </ul>

                            <!-- Contact btn -->
                            @guest
                                <li class="contact-btn"><a href="{{ route('login') }}">{{ __('Sign In') }}</a></li>
                                @if (Route::has('register'))
                                    <li class="contact-btn"><a href="{{ route('register') }}">{{ __('Sign Up') }}</a></li>
                                @endif
                            @else
                                <li class="dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <div style="border: 1px #92C800 solid;" class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" style="color: #92C800;" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
@guest
    @else

    @endguest

@section('content')
@show()
<!-- **** Footer Area Start **** -->
<footer class="footer-area bg-img bg-overlay-2 section-padding-100-0"
        style="background-image: url({{asset('/img/bg-img/17.jpg')}});">
    <!-- Main Footer Area -->
    <div class="main-footer-area">
        <div class="container">
            <div class="row justify-content-between">

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget mb-80">
                        <!-- Footer Logo -->
                        <a href="#" class="footer-logo"><img src="{{asset('/img/core-img/logo-1.png')}}" alt=""></a>

                        <p>An traffic app helps and answers your questions wherever you are.</p>
                        <!-- Social Info -->
                        <div class="social-info">
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget mb-80">
                        <!-- Widget Title -->
                        <h5 class="widget-title">Get info</h5>

                        <!-- Contact Area -->
                        <div class="footer-contact">
                            <p>Phone: <span>0945549999</span></p>
                            <p>Email: <span>t1808a@fpt.edu.vn</span></p>
                            <p>Address: <span>8 Ton That Thuyet Street, Cau Giay District, Ha Noi City, VietNam.</span></p>
                        </div>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget mb-80">
                        <!-- Widget Title -->
                        <h5 class="widget-title">Property Cities</h5>

                        <!-- Footer Nav -->
                        <ul class="footer-nav d-flex flex-wrap">
                            <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Viet Nam</a></li>
                            <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> United States</a>
                            </li>
                            <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> San Francisco</a>
                            </li>
                            <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> India</a></li>
                            <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Pakistan</a></li>
                            <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Mehico</a></li>
                            <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Malaysia</a></li>
                            <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> United Kingdom</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-footer-widget mb-80">
                        <!-- Widget Title -->
                        <h5 class="widget-title">Newsletter</h5>

                        <p>Subscribe our newsletter gor get notification about new updates, count, etc.</p>
                        <!-- Newsletter Form -->
                        <form action="index.html" class="nl-form">
                            <input type="email" name="nl-email" class="form-control"
                                   placeholder="Enter your email...">
                            <button type="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Copywrite Area -->
    <div class="copywrite-content">
        <div class="container">
            <div class="row align-items-center">
                <!-- Copywrite Text -->
                <div class="col-12 col-sm-6">
                    <div class="copywrite-text">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                            All rights reserved.
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>

                <!-- Footer Menu -->
                <div class="col-12 col-sm-6">
                    <div class="footer-menu">
                        <ul class="nav">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- **** Footer Area End **** -->

<!-- **** All JS Files ***** -->
<!-- jQuery 2.2.4 -->
<script src="{{asset('/js/jquery.min.js')}}"></script>
<!--validate-->
<script src="{{asset('/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('/js/additional-methods.min.js')}}"></script>
<script src="{{asset('/js/validateForm.js')}}"></script>
<!-- Popper -->
<script src="{{asset('/js/popper.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('/js/bootstrap.min.js')}}"></script>
<!-- All Plugins -->
<script src="{{asset('js/rehomes.bundle.js')}}"></script>
<!-- Active -->
<script src="{{asset('/js/default-assets/active.js')}}"></script>
<script src="{{ asset('js/app.js') }}" defer></script>


</body>
</html>