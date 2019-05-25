<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title','NEUBOJ')</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--***** Bootstrap CSS ******-->
        <link href="{{ asset('public/assets/css/bootstrap.css') }}" rel="stylesheet">
        <!--*********Custom CSS***********-->
        <link href="{{ asset('public/assets/css/style.css') }}" rel="stylesheet">

    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span> 
                    </button>
                    <a class="navbar-brand" href="{{route('index')}}">NEUBOJ</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">

                        <li class="{{Request::is('/') ? 'active' : null}}"><a href="{{route('index')}}">LOGIN</a></li>
                        <li class="{{Request::is('register') ? 'active' : null}}"><a href="{{route('register')}}">REGISTER</a></li> 
                        <li class="{{Request::is('contest') ? 'active' : null}}"><a href="{{route('contest')}}">CONTESTS</a></li> 
                        <li class="{{Request::is('categories') ? 'active' : null}}"><a href="{{route('categories')}}">PROBLEM</a></li> 
                        <li class="{{Request::is('') ? 'active' : null}}"><a href="#">RANK</a></li> 
                    </ul>

                </div>
            </div>
        </nav>
        <div class="container">
            @yield('content')
        </div>

        <div class="container">
            <div class="row"> 

            </div>
        </div>


        <!--****Jquery**********-->
        <script src="{{ asset('public/assets/js/jquery-3.2.1.min.js') }}"></script>
        <!--***Bootstrap Js******-->
        <script src="{{ asset('public/assets/js/bootstrap.min.js') }}"></script>
    </body>
</html>
