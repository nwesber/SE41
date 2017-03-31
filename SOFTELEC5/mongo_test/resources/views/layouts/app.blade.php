<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home/blogCard.css') }}" rel="stylesheet">
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>

    <style type="text/css">

        body {
                height: 1000px;
        }

        #header {
            width: 100%;
            position: absolute;
            bottom: 0;
        }

        #header-wrap {
            width: 100%;
            position: fixed;
            background-color: #e0e0e0;
        }

        .navbtn{
            border-radius: 999em;
            height: 27px;
            padding-top: 1px !important;
            margin-top: 10px;
        }

        .navbtn{
            border-radius: 999em;
            height: 27px;
            padding-top: 1px !important;
            margin-top: 10px;
            background: #02b875 !important;
            border-color: #02b875 !important;
            color: white !important;
        }

        @media screen and (max-width: 736px) {
            .navbtn{
                border-radius: 999em;
                height: 27px;
                padding-top: 1px !important;
                margin-top: 10px;
                background: #02b875 !important;
                border-color: #02b875 !important;
                color: white !important;
                margin-left: 20px !important;
                margin-right: 20px !important;
            }
        }

        .avatar-icon{
            width: 32px;
            height: 32px;
            border-top-left-radius: 100%;
            border-top-right-radius: 100%;
            border-bottom-right-radius: 100%;
            border-bottom-left-radius: 100%;
        }

        .navbar-default .navbar-nav>.open>a, .navbar-default .navbar-nav>.open>a:focus, .navbar-default .navbar-nav>.open>a:hover{
            background-color: #fff !important;
        }

        .list-group-item{
            border: 15px;
            padding-top: 15px;
            padding-right: 100px;
            padding-bottom: 15px;
            padding-left: 20px;

        }

        .popover-content{
            padding-top: 0px !important;
            padding-right: 0px !important;
            padding-bottom: 0px !important;
            padding-left: 0px !important;
        }

        .popover{
            padding-top: 0px !important;
            padding-right: 0px !important;
            padding-bottom: 0px !important;
            padding-left: 0px !important;
        }

    </style>
</head>
<body>
    <div id="app">
    <div class="navbar navbar-default navbar-static-top " style="margin: 0px; border: 0px;">
      <div class="container">
        <div class="navbar-header">
          <!-- Collapsed Hamburger -->
          <a class="navbar-brand" href="{{ url('/') }}">
            BRAND
          </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
          <!-- Left Side Of Navbar -->

          <!-- Right Side Of Navbar -->
          <ul class="nav navbar-nav navbar-right">
            <!-- Authentication Links -->
            @if (Auth::guest())
              <li><a href="{{ route('login') }}">Login</a></li>
              <li><a href="{{ route('register') }}">Register</a></li>
            @else
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a
                        href="javascript:void(0);"
                        data-html="true"
                        data-toggle="popover"
                        data-placement="bottom">
                        <img src="https://placehold.it/32x32" class="avatar-icon"/>
                        </a>
                    </li>
                </ul>
                <div id="popover-content" class="hide">
                    <div class="list-group">
                      <a href="javascript:void(0);" class="list-group-item" style="width: 100%;">New Story</a>
                      <a href="javascript:void(0);" class="list-group-item">My Stories</a>
                      <a href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();"
                         class="list-group-item">Sign Out</a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                           {{ csrf_field() }}
                        </form>

                    </div>
                </div>
            @endif
          </ul>
        </div>
      </div>
    </div>

    <div class="clearHeader navbar navbar-default navbar-static-top ">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".main-nav">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{ url('/') }}">
            HOME
          </a>
        </div>
        @if (Auth::guest())
        <ul class="getstarted nav navbar-nav navbar-right" style="display: none;">
          <li><a href="javascript:void(0);" class="btn btn-default btn-xs navbtn">Get Started</a></li>
        </ul>

        <div class="collapse navbar-collapse main-nav">
          <ul class="nav navbar-nav">
            <li><a href="#">TRAVEL</a></li>
            <li class="divider-vertical"></li>
            <li><a href="#">GAMES</a></li>
            <li class="divider-vertical"></li>
            <li><a href="#">FOOD</a></li>
            <li class="divider-vertical"></li>
            <li><a href="#">MOVIES</a></li>
            <li class="divider-vertical"></li>
            <li><a href="#">COMICS</a></li>
          </ul>
        </div>
        @else

        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">


                <ul class="dropdown-menu" role="menu">
                  <li>
                    <a href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
                      Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                    </form>
                  </li>
                </ul>
              </li>
        </ul>
        <div class="collapse navbar-collapse main-nav">
          <ul class="nav navbar-nav">
            <li><a href="#">TRAVEL</a></li>
            <li class="divider-vertical"></li>
            <li><a href="#about">GAMES</a></li>
            <li class="divider-vertical"></li>
            <li><a href="#contact">FOOD</a></li>
            <li class="divider-vertical"></li>
            <li><a href="#contact">MOVIES</a></li>
            <li class="divider-vertical"></li>
            <li><a href="#contact">COMICS</a></li>
          </ul>
        </div>

        @endif
      </div>
    </div>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript">
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();

            if (scroll >= 100) {
                $(".clearHeader").removeClass("navbar-static-top");
                $(".clearHeader").addClass("navbar-fixed-top");
                $(".getstarted").show();
                $(".login").hide();
            } else {
                $(".clearHeader").removeClass("navbar-fixed-top");
                $(".clearHeader").addClass("navbar-static-top");
                $(".getstarted").hide();
                $(".login").hide();
            }
        });

        $(function () {
          $('[data-toggle="popover"]').popover()
        })


        $("[data-toggle=popover]").popover({
            container: 'body',
            html: true,
            content: function() {
              return $('#popover-content').html();
            }
        });

    </script>
</body>
</html>
