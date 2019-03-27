<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

    <title>Smart Traffic</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta name="viewport" content="width=device-width"/>


    <!-- Bootstrap core CSS     -->
    <link href="{{asset('admin/assets/css/bootstrap.min.css')}}" rel="stylesheet"/>

    <!-- Animation library for notifications   -->
    <link href="{{asset('admin/assets/css/animate.min.css')}}" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="{{asset('admin/assets/css/light-bootstrap-dashboard.css?v=1.4.0')}}" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{asset('admin/assets/css/demo.css')}}" rel="stylesheet"/>


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="{{asset('admin/assets/css/pe-icon-7-stroke.css')}}" rel="stylesheet"/>


    <!--    Favicon   -->
    <link rel="icon" href="{{asset('admin/assets/img/logo-short-cut.png')}}">
</head>
<body>
<div class="wrapper">
    <div class="sidebar" data-color="green" data-image="assets/img/sidebar-5.jpg">

        <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    <h2>SMART TRAFFIC</h2>
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="user.html">
                        <i class="pe-7s-user"></i>
                        <p>User Profile</p>
                    </a>
                </li>
                <li>
                    <a href="table.html">
                        <i class="pe-7s-note2"></i>
                        <p>Table List</p>
                    </a>
                </li>
                <li class="active">
                    <a href="complaintUser.html">
                        <i class="pe-7s-news-paper"></i>
                        <p>Complaint's User</p>
                    </a>
                </li>
                <li>
                    <a href="news.html">
                        <i class="pe-7s-science"></i>
                        <p>News</p>
                    </a>
                </li>
                <li>
                    <a href="maps.html">
                        <i class="pe-7s-map-marker"></i>
                        <p>Maps</p>
                    </a>
                </li>
                <li>
                    <a href="notifications.html">
                        <i class="pe-7s-bell"></i>
                        <p>Notifications</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    @section('content')
        @show()
    {{--<div class="main-panel">--}}
        {{--<nav class="navbar navbar-default navbar-fixed">--}}
            {{--<div class="container-fluid">--}}
                {{--<div class="navbar-header">--}}
                    {{--<button type="button" class="navbar-toggle" data-toggle="collapse"--}}
                            {{--data-target="#navigation-example-2">--}}
                        {{--<span class="sr-only">Toggle navigation</span>--}}
                        {{--<span class="icon-bar"></span>--}}
                        {{--<span class="icon-bar"></span>--}}
                        {{--<span class="icon-bar"></span>--}}
                    {{--</button>--}}
                    {{--<a class="navbar-brand" href="#">User</a>--}}
                {{--</div>--}}
                {{--<div class="collapse navbar-collapse">--}}
                    {{--<ul class="nav navbar-nav navbar-left">--}}
                        {{--<li>--}}
                            {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown">--}}
                                {{--<i class="fa fa-dashboard"></i>--}}
                                {{--<p class="hidden-lg hidden-md">Dashboard</p>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                        {{--<li class="dropdown">--}}
                            {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown">--}}
                                {{--<i class="fa fa-globe"></i>--}}
                                {{--<b class="caret hidden-sm hidden-xs"></b>--}}
                                {{--<span class="notification hidden-sm hidden-xs">5</span>--}}
                                {{--<p class="hidden-lg hidden-md">--}}
                                    {{--5 Notifications--}}
                                    {{--<b class="caret"></b>--}}
                                {{--</p>--}}
                            {{--</a>--}}
                            {{--<ul class="dropdown-menu">--}}
                                {{--<br>--}}
                                {{--<li>--}}
                                    {{--<a href="#">The user has replied to the website</a>--}}
                                {{--</li>--}}
                                {{--<hr>--}}
                                {{--<li>--}}
                                    {{--<a href="#">The user has replied to the website</a>--}}
                                {{--</li>--}}
                                {{--<hr>--}}
                                {{--<li>--}}
                                    {{--<a href="#">The user has replied to the website</a>--}}
                                {{--</li>--}}
                                {{--<hr>--}}
                                {{--<li>--}}
                                    {{--<a href="#">The user has replied to the website</a>--}}
                                {{--</li>--}}
                                {{--<hr>--}}
                                {{--<li>--}}
                                    {{--<a href="#">The user has replied to the website</a>--}}
                                {{--</li>--}}
                                {{--<br>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<a href="">--}}
                                {{--<i class="fa fa-search"></i>--}}
                                {{--<p class="hidden-lg hidden-md">Search</p>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                    {{--</ul>--}}

                    {{--<ul class="nav navbar-nav navbar-right">--}}
                        {{--<li class="dropdown">--}}
                            {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown">--}}
                                {{--<p>Account</p>--}}
                                {{--<ul class="dropdown-menu">--}}
                                    {{--<li><a href="#">Sign In</a></li>--}}
                                    {{--<li><a href="#">Sign Up</a></li>--}}
                                {{--</ul>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                        {{--<li class="separator hidden-lg hidden-md"></li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</nav>--}}


        {{--<div class="content">--}}
            {{--<div class="container-fluid">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-md-4">--}}
                        {{--<div class="card card-user">--}}
                            {{--<div class="image">--}}
                                {{--<img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400"--}}
                                     {{--alt="..."/>--}}
                            {{--</div>--}}
                            {{--<div class="content">--}}
                                {{--<div class="author">--}}
                                    {{--<a href="#">--}}
                                        {{--<img class="avatar border-gray" src="assets/img/54268488_653047648489771_6352047796589166592_n.jpg" alt="..."/>--}}

                                        {{--<h4 class="title">Ngô Thị Mai<br/>--}}
                                            {{--<small>maingo123</small>--}}
                                        {{--</h4>--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                                {{--<p class="description text-center"> "Koenigsegg Jesko <br>--}}
                                    {{--When things become too familiar<br>--}}
                                    {{--They often don't cherish each other--}}
                                {{--</p>--}}
                            {{--</div>--}}
                            {{--<hr>--}}
                            {{--<div class="text-center">--}}
                                {{--<button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>--}}
                                {{--<button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>--}}
                                {{--<button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i>--}}
                                {{--</button>--}}

                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="col-md-4">--}}
                        {{--<div class="card card-user">--}}
                            {{--<div class="image">--}}
                                {{--<img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400"--}}
                                     {{--alt="..."/>--}}
                            {{--</div>--}}
                            {{--<div class="content">--}}
                                {{--<div class="author">--}}
                                    {{--<a href="#">--}}
                                        {{--<img class="avatar border-gray" src="assets/img/51496121_762796120767363_8583723425044889600_n.jpg" alt="..."/>--}}

                                        {{--<h4 class="title">Pham Thanh Hoa<br/>--}}
                                            {{--<small>hoaThanh1234</small>--}}
                                        {{--</h4>--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                                {{--<p class="description text-center"> "Koenigsegg Jesko <br>--}}
                                    {{--When things become too familiar<br>--}}
                                    {{--They often don't cherish each other--}}
                                {{--</p>--}}
                            {{--</div>--}}
                            {{--<hr>--}}
                            {{--<div class="text-center">--}}
                                {{--<button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>--}}
                                {{--<button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>--}}
                                {{--<button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i>--}}
                                {{--</button>--}}

                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="col-md-4">--}}
                        {{--<div class="card card-user">--}}
                            {{--<div class="image">--}}
                                {{--<img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400"--}}
                                     {{--alt="..."/>--}}
                            {{--</div>--}}
                            {{--<div class="content">--}}
                                {{--<div class="author">--}}
                                    {{--<a href="#">--}}
                                        {{--<img class="avatar border-gray" src="assets/img/51378290_1238615529613041_1765698318521860096_n.jpg" alt="..."/>--}}

                                        {{--<h4 class="title">Phan Hoài Nam<br/>--}}
                                            {{--<small>namphan1234</small>--}}
                                        {{--</h4>--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                                {{--<p class="description text-center"> "Koenigsegg Jesko <br>--}}
                                    {{--When things become too familiar<br>--}}
                                    {{--They often don't cherish each other--}}
                                {{--</p>--}}
                            {{--</div>--}}
                            {{--<hr>--}}
                            {{--<div class="text-center">--}}
                                {{--<button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>--}}
                                {{--<button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>--}}
                                {{--<button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i>--}}
                                {{--</button>--}}

                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<div class="row">--}}
                    {{--<div class="col-md-4">--}}
                        {{--<div class="card card-user">--}}
                            {{--<div class="image">--}}
                                {{--<img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400"--}}
                                     {{--alt="..."/>--}}
                            {{--</div>--}}
                            {{--<div class="content">--}}
                                {{--<div class="author">--}}
                                    {{--<a href="#">--}}
                                        {{--<img class="avatar border-gray" src="assets/img/54435778_111757206658593_819455557936087040_n.jpg" alt="..."/>--}}

                                        {{--<h4 class="title">Trần Thi<br/>--}}
                                            {{--<small>thitran1234</small>--}}
                                        {{--</h4>--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                                {{--<p class="description text-center"> "Koenigsegg Jesko <br>--}}
                                    {{--When things become too familiar<br>--}}
                                    {{--They often don't cherish each other--}}
                                {{--</p>--}}
                            {{--</div>--}}
                            {{--<hr>--}}
                            {{--<div class="text-center">--}}
                                {{--<button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>--}}
                                {{--<button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>--}}
                                {{--<button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i>--}}
                                {{--</button>--}}

                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="col-md-4">--}}
                        {{--<div class="card card-user">--}}
                            {{--<div class="image">--}}
                                {{--<img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400"--}}
                                     {{--alt="..."/>--}}
                            {{--</div>--}}
                            {{--<div class="content">--}}
                                {{--<div class="author">--}}
                                    {{--<a href="#">--}}
                                        {{--<img class="avatar border-gray" src="assets/img/39947271_323791158361624_3852960524962627584_n.jpg" alt="..."/>--}}

                                        {{--<h4 class="title">Dương Quang Phú<br/>--}}
                                            {{--<small>phuduong1234</small>--}}
                                        {{--</h4>--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                                {{--<p class="description text-center"> "Koenigsegg Jesko <br>--}}
                                    {{--When things become too familiar<br>--}}
                                    {{--They often don't cherish each other--}}
                                {{--</p>--}}
                            {{--</div>--}}
                            {{--<hr>--}}
                            {{--<div class="text-center">--}}
                                {{--<button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>--}}
                                {{--<button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>--}}
                                {{--<button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i>--}}
                                {{--</button>--}}

                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="col-md-4">--}}
                        {{--<div class="card card-user">--}}
                            {{--<div class="image">--}}
                                {{--<img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400"--}}
                                     {{--alt="..."/>--}}
                            {{--</div>--}}
                            {{--<div class="content">--}}
                                {{--<div class="author">--}}
                                    {{--<a href="#">--}}
                                        {{--<img class="avatar border-gray" src="assets/img/41737776_2098714460393515_785225214047813632_n.jpg" alt="..."/>--}}

                                        {{--<h4 class="title">Nguyễn Tuấn Anh<br/>--}}
                                            {{--<small>anhtuan1234</small>--}}
                                        {{--</h4>--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                                {{--<p class="description text-center"> "Koenigsegg Jesko <br>--}}
                                    {{--When things become too familiar<br>--}}
                                    {{--They often don't cherish each other--}}
                                {{--</p>--}}
                            {{--</div>--}}
                            {{--<hr>--}}
                            {{--<div class="text-center">--}}
                                {{--<button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>--}}
                                {{--<button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>--}}
                                {{--<button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>--}}

                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy;
                    <script>document.write(new Date().getFullYear())</script>
                    <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

<!--   Core JS Files   -->
<script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Charts Plugin -->
<script src="assets/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="assets/js/bootstrap-notify.js"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src="assets/js/demo.js"></script>

</html>
