<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Smart Traffic</title>

    <!-- Favicon -->
    <link rel="icon" href="{{asset('/img/core-img/logo-short-cut.png')}}">

    <!-- Stylesheet -->
    <link href="{{ asset('/css/mystyle.css') }}" rel="stylesheet">
</head>

<body>

<!-- **** Header Area Start **** -->
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
                            <ul id="nav">
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
                            <div class="contact-btn mt-3 mt-lg-0 ml-3 ml-lg-5">
                                <a href="#" data-target="#signInModal" data-toggle="modal">Sign In</a>
                            </div>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- **** Header Area End **** -->


<!--Modal-->
<div class="modal fade" id="signInModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="exampleModalLabel">Account</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="tab-content">
                    <div id="logIn" class="tab-pane active">
                        <h4>Sign In</h4>
                        <hr>
                        <form name="signIn-form" id="signIn-form">
                            <div class="form-group">
                                <label>User Name</label>
                                <input type="text" name="userName" class="form-control"
                                       placeholder="Enter User Name">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control"
                                       placeholder="Enter Password">
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input"
                                       style="margin-top: 10px">
                                <label class="form-check-label">Remember Me</label>
                            </div>
                            <div class="modal-footer">
                                <label>&nbsp;</label>
                                <button type="reset" class="btn" name="btn-reset" value="Reset">
                                    Reset
                                </button>
                                <button type="submit" class="btn" name="btn-create" value="Create">
                                    Sign In
                                </button>
                            </div>
                        </form>
                        <div class="modal-footer">
                            Have you an account? <br>
                            <a href="#signUpModal" data-toggle="tab">Sign Up</a>
                        </div>
                    </div>
                    <div id="signUpModal" class="tab-pane fade">
                        <h4>Sign Up</h4>
                        <hr>
                        <form name="signUp-form" id="signUp-form">
                            <div class="form-group">
                                <label>User Name</label>
                                <input type="text" name="userName" class="form-control"
                                       placeholder="Enter User Name">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control"
                                       placeholder="Enter Email">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control"
                                       placeholder="Enter Password">
                            </div>
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" name="confirm-password" class="form-control"
                                       placeholder="Enter Confirm Password">
                            </div>
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input type="text" name="phone" class="form-control"
                                       placeholder="Enter Phone Number">
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" name="address" class="form-control"
                                       placeholder="Enter Confirm Password">
                            </div>
                            <div class="form-group">
                                <label>Passport</label>
                                <input type="text" name="passport" class="form-control"
                                       placeholder="Enter Passport">
                            </div>
                            <div class="form-group">
                                <label>Voter ID</label>
                                <input type="text" name="voterID" class="form-control"
                                       placeholder="Enter Voter ID/SSNID">
                            </div>
                            <div class="form-group">
                                <label>Driving Licenses</label>
                                <input type="text" name="driving" class="form-control"
                                       placeholder="Enter Driving Licenses">
                            </div>
                            <div class="modal-footer">
                                <label>&nbsp;</label>
                                <button type="reset" class="btn" name="btn-reset" value="Reset">
                                    Reset
                                </button>
                                <button type="submit" class="btn" name="btn-create" value="Create">
                                    Sign Up
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Modal End-->


@section('content')
@show()
<!-- **** Blog area End **** -->

<!-- **** Partner Area Start **** -->
<!--<div class="partner-area wow fadeInUp" data-wow-delay="200ms">-->
<!--<div class="container">-->
<!--<div class="row">-->
<!--<div class="col-12">-->
<!--<div class="partner-logo-slide owl-carousel">-->
<!--&lt;!&ndash; Single Partner Logo &ndash;&gt;-->
<!--<a href="#" class="partner-logo wow fadeInUp" data-wow-delay="100ms"><img-->
<!--src="img/core-img/1.png"-->
<!--alt=""></a>-->
<!--&lt;!&ndash; Single Partner Logo &ndash;&gt;-->
<!--<a href="#" class="partner-logo wow fadeInUp" data-wow-delay="300ms"><img-->
<!--src="img/core-img/2.png"-->
<!--alt=""></a>-->
<!--&lt;!&ndash; Single Partner Logo &ndash;&gt;-->
<!--<a href="#" class="partner-logo wow fadeInUp" data-wow-delay="500ms"><img-->
<!--src="img/core-img/3.png"-->
<!--alt=""></a>-->
<!--&lt;!&ndash; Single Partner Logo &ndash;&gt;-->
<!--<a href="#" class="partner-logo wow fadeInUp" data-wow-delay="700ms"><img-->
<!--src="img/core-img/4.png"-->
<!--alt=""></a>-->
<!--&lt;!&ndash; Single Partner Logo &ndash;&gt;-->
<!--<a href="#" class="partner-logo wow fadeInUp" data-wow-delay="900ms"><img-->
<!--src="img/core-img/5.png"-->
<!--alt=""></a>-->
<!--</div>-->
<!--</div>-->
<!--</div>-->
<!--</div>-->
<!--</div>-->
<!-- **** Partner Area End **** -->

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

</body>

</html>