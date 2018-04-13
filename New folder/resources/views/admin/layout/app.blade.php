<!DOCTYPE html>
<html>
<head>

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/menu1.css') }}" rel="stylesheet" />
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">--}}


</head>
<body>
<nav class="navbar navbar-inverse" style="border-radius: 0px!important;">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header" style="margin-left: 43%;">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-3">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#" >WELCOME TO ADMIN</a>
        </div>

    </div><!-- /.container -->
</nav><!-- /.navbar -->
<div class="container-fluid">
    <div class="row">

        <div class="col-md-3" style="margin-left: -30px;height: 500px;">
            <div class="nav-side-menu">
                <div class="brand">ADMIN</div>
                <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
                <div class="menu-list">
                    <ul id="menu-content" class="menu-content collapse out">
                        <li>
                            <a href="{{route('hello.lang')}}">
                                <i class="fa fa-dashboard fa-lg"></i> Hello Page
                            </a>
                        </li>
                        <li>
                            <a href="{{route('lang.insert')}}">
                                <i class="fa fa-dashboard fa-lg"></i> Languages
                            </a>
                        </li>
                        <li>
                            <a href="{{route('topic.insert')}}">
                                <i class="fa fa-dashboard fa-lg"></i> Topics
                            </a>
                        </li>

                        <li>
                            <a href="{{route('subtopic.insert')}}">
                                <i class="fa fa-dashboard fa-lg"></i> Sub Topics
                            </a>
                        </li>


                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            @yield('content')

        </div>

    </div>


</div>
    <footer>
        <div class="footer" id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4  col-md-2 col-sm-4 col-xs-6">
                        <h3> QUICK LINKS</h3>
                        <ul>
                            <li> <a href="#"> Home </a> </li>
                            <li> <a href="#"> About </a> </li>
                            <li> <a href="#"> Services </a> </li>
                            <li> <a href="#"> Contact </a> </li>
                        </ul>
                    </div>

                    <div class="col-lg-4  col-md-2 col-sm-4 col-xs-6">
                        <h3> QUICK LINKS </h3>
                        <ul>
                            <li> <a href="#"> Home </a> </li>
                            <li> <a href="#"> About </a> </li>
                            <li> <a href="#"> Services </a> </li>
                            <li> <a href="#"> Contact </a> </li>
                        </ul>
                    </div>
                    <div class="col-lg-3  col-md-3 col-sm-6 col-xs-12 ">
                        <h3> TUTORIAL </h3>
                        <ul>
                            <li>
                                <div class="input-append newsletter-box text-center">
                                    <input type="text" class="form-control full text-center" placeholder="Email "><br />
                                    <textarea name="" id="" cols="34" rows="5"></textarea>
                                    <button class="btn  bg-gray" style="margin-top: 18px;background: rebeccapurple;" type="button">Send<i class="fa fa-long-arrow-right"> </i> </button>
                                </div>
                            </li>
                        </ul>

                    </div>
                </div>
                <!--/.row-->
            </div>
            <!--/.container-->
        </div>
        <!--/.footer-->

        <div class="footer-bottom">
            <div class="container">
                <p class="pull-left"> Copyright © Footer Online Tutorial Plugin 2018. All right reserved. </p>
                <div class="pull-right">
                    <ul class="nav nav-pills payments">
                        <li><i class="fa fa-cc-visa"></i></li>
                        <li><i class="fa fa-cc-mastercard"></i></li>
                        <li><i class="fa fa-cc-amex"></i></li>
                        <li><i class="fa fa-cc-paypal"></i></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--/.footer-bottom-->
    </footer>
<script src="{{ asset('js/app.js') }}"></script>
{{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>--}}
</body>
</html>
