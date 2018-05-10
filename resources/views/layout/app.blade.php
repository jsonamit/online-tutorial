<!DOCTYPE html>
<html>
<head>

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/round-about.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/menu1.css') }}" rel="stylesheet" />
    <link href="{{ asset('js/bootstrap.min.js') }}" rel="text/javascript" />
    <link href="{{ asset('js/bootstrap.bundle.min.js') }}" rel="text/javascript" />
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">--}}

</head>
<body>
<nav class="navbar navbar-inverse" style="border-radius: 0px!important;">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-3">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Online Tutorial</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-3">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{route('languages')}}">Home</a></li>
                <li><a href="{{route('about')}}">About</a></li>
                <li><a href="#">Services</a></li>
                {{--<li><a href="#">Works</a></li>--}}
                {{--<li><a href="#">News</a></li>--}}
                <li><a href="{{route('contact')}}">Contact</a></li>
                <li>
                    <a class="btn btn-default btn-outline btn-circle"  data-toggle="collapse" href="#nav-collapse3" aria-expanded="false" aria-controls="nav-collapse3">Search</a>
                </li>
            </ul>
            <div class="collapse nav navbar-nav nav-collapse" id="nav-collapse3">
                <form class="navbar-form navbar-right" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search" />
                    </div>
                    <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                </form>
            </div>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
</nav><!-- /.navbar -->

<div class="container-fluid">

    <div class="row">

            @yield('content')

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
                                <form action="{{route('sendmail.send')}}" method="post">
                                    {{ csrf_field() }}
                                <div class="input-append newsletter-box text-center">
                                    <input type="text" class="form-control full text-center" name="email" placeholder="Email ">
                                    <br />
                                    <textarea cols="34" rows="5" name="massege"></textarea>
                                    <input class="btn  bg-gray" style="margin-top: 18px;background: rebeccapurple;" type="submit" value="Send"><i class="fa fa-long-arrow-right"> </i> </input>
                                </div>
                                </form>
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
