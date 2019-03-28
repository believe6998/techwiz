<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

    <title>Smart Traffic</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta name="viewport" content="width=device-width"/>


    <!-- Bootstrap core CSS     -->
    <link href="{{asset('/admin/css/bootstrap.min.css')}}" rel="stylesheet"/>

    <!-- Animation library for notifications   -->
    <link href="{{asset('/admin/css/animate.min.css')}}" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="{{asset('/admin/css/light-bootstrap-dashboard.css?v=1.4.0')}}" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{asset('/admin/css/demo.css')}}" rel="stylesheet"/>


    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="{{asset('/css/css/font-awesome.min.css')}}">
    {{--<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">--}}
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="{{asset('/admin/css/pe-icon-7-stroke.css')}}" rel="stylesheet"/>


    <!--    Favicon   -->
    <link rel="icon" href="{{asset('/admin/img/logo-short-cut.png')}}">
</head>
<body>
<div class="wrapper">
    <div class="sidebar" data-color="green" data-image="assets/img/sidebar-5.jpg">
        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                    <h2>SMART TRAFFIC</h2>
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="/admin/user/list">
                        <i class="pe-7s-user"></i>
                        <p>User</p>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="pe-7s-note2"></i>
                        <p>Table List</p>
                    </a>
                </li>
                <li class="active">
                    <a href="/admin/complaint/list">
                        <i class="pe-7s-news-paper"></i>
                        <p>Complaint's User</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">User</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-globe"></i>
                                <b class="caret hidden-sm hidden-xs"></b>
                                <span class="notification hidden-sm hidden-xs">5</span>
                                <p class="hidden-lg hidden-md">
                                    5 Notifications
                                    <b class="caret"></b>
                                </p>
                            </a>
                            <ul class="dropdown-menu">
                                <br>
                                <li>
                                    <a href="#">The user has replied to the website</a>
                                </li>
                                <hr>
                                <li>
                                    <a href="#">The user has replied to the website</a>
                                </li>
                                <hr>
                                <li>
                                    <a href="#">The user has replied to the website</a>
                                </li>
                                <hr>
                                <li>
                                    <a href="#">The user has replied to the website</a>
                                </li>
                                <hr>
                                <li>
                                    <a href="#">The user has replied to the website</a>
                                </li>
                                <br>
                            </ul>
                        </li>
                        <li>
                            <a href="">
                                <i class="fa fa-search"></i>
                                <p class="hidden-lg hidden-md">Search</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <p>Account</p>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Sign In</a></li>
                                    <li><a href="#">Sign Up</a></li>
                                </ul>
                            </a>
                        </li>
                        <li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>
        @section('content')
        @show()
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
                    T1808A Team, made with love for a better web
                </p>
            </div>
        </footer>
    </div>
</div>
</body>

<!--   Core JS Files   -->
<script src="{{asset('/admin/js/jquery.3.2.1.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/admin/js/bootstrap.min.js')}}" type="text/javascript"></script>

<!--  Charts Plugin -->
<script src="{{asset('/admin/js/chartist.min.js')}}"></script>

<!--  Notifications Plugin    -->
<script src="{{asset('/admin/js/bootstrap-notify.js')}}"></script>

<!--  Google Maps Plugin    -->

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="{{asset('/admin/js/light-bootstrap-dashboard.js?v=1.4.0')}}"></script>

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src="{{asset('/admin/js/demo.js')}}"></script>

</html>
