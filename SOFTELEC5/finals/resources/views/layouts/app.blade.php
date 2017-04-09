<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Large</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="//code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" type="text/css" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-tokenfield.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/tokenfield-typeahead.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home/blogCard.css') }}" rel="stylesheet">
    <link href="{{ asset('css/blog/blog.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-tagsinput.css') }}" rel="stylesheet">
    <link href="{{ asset('css/blog/comment.css') }}" rel="stylesheet">
    <!-- Scripts -->
    <script>
      window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
      ]) !!};
    </script>
    <style type="text/css">

      .smaller-image {
        width: 175px;
      }


    </style>
  </head>
  <body>
    <div id="app">
      <div class="navbar navbar-default navbar-fixed-top " style="margin: 0px;">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".main-nav">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">
              LARGE
            </a>
          </div>

          <ul class="nav navbar-nav navbar-right">
              <!-- Authentication Links -->

            @if (Auth::guest())
               <li><a href="#" class="btn btn-default btn-xs navbtn"
               data-toggle="modal" data-target="#myModal"><strong>Get Started</strong></a></li>
            @else
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                  {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
                  <li> <a href="{{ url('/profile/'. Auth::user()->id)  }}">Profile</a>
                  <li> <a href="{{ route('blog.create') }}">New Story</a>
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
            @endif
          </ul>

          <div class="collapse navbar-collapse main-nav">
            <ul class="nav navbar-nav">
              <li><a href="{{ url('/topic/'. 'travel')  }}">TRAVEL</a></li>
              <li class="divider-vertical"></li>
              <li><a href="{{ url('/topic/'. 'games')  }}">GAMES</a></li>
              <li class="divider-vertical"></li>
              <li><a href="{{ url('/topic/'. 'food')  }}">FOOD</a></li>
              <li class="divider-vertical"></li>
              <li><a href="{{ url('/topic/'. 'movies')  }}">MOVIES</a></li>
              <li class="divider-vertical"></li>
              <li><a href="{{ url('/topic/'. 'movies')  }}">COMICS</a></li>
            </ul>
          </div>

        </div>
      </div>

      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div id="login-overlay" class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title" id="myModalLabel">Login to large.com</h4>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-xs-6">
                  <div class="well">
                    <form id="loginForm" method="POST" action="{{ route('login') }}" novalidate="novalidate">
                      <div class="form-group">
                        <label for="username" class="control-label">Username</label>
                        <input type="text" class="form-control" id="email" name="email" value="" required="" title="Please enter you username" placeholder="example@gmail.com">
                        <span class="help-block"></span>
                      </div>
                      <div class="form-group">
                        <label for="password" class="control-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" value="" required="" title="Please enter your password">
                        <span class="help-block"></span>
                      </div>
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <div id="loginErrorMsg" class="alert alert-error hide">Wrong username og password</div>
                      <button type="submit" class="btn btn-success btn-block" style="background-color: #02b875">Login</button>
                      <a href="{{ route('password.request') }}" class="btn btn-default btn-block">Help to login</a>
                    </form>
                  </div>
                </div>
                <div class="col-xs-6">
                  <p class="lead">Register now for <span class="text-success">FREE</span></p>
                  <ul class="list-unstyled" style="line-height: 2">
                    <li><span class="fa fa-check text-success"></span> Write your own article.</li>
                    <li><span class="fa fa-check text-success"></span> Comment on any article.</li>
                    <li><span class="fa fa-check text-success"></span> View other peoples articles.</li>
                    <li><span class="fa fa-check text-success"></span> Search other peoples articles.</li>
                  </ul>
                  <p><a href="{{ url('/register') }}" class="btn btn-info btn-block">Yes please, register now!</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

        <div class="scroll-top-wrapper ">
          <span class="scroll-top-inner">
            <i class="fa fa-2x fa-arrow-circle-up"></i>
          </span>
        </div>
        @yield('content')


    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="http://cloud.tinymce.com/stable/tinymce.min.js?apiKey=zjzlnpisviw5oas4htsem7w993fr17gm1dyfi3x3z0o6aobo"></script>
    <script src="{{ asset('js/bootstrap-tagsinput.min.js') }}"></script>
    <script src="{{ asset('js/tinymce.js') }}"></script>
    <script type="text/javascript">
      $(document).keypress(
      function(event){
       if (event.which == '13') {
          event.preventDefault();
        }
      });
    </script>
    <script src="{{ asset('js/fb.js') }}"></script>
    <script src="{{ asset('js/blog.js') }}"></script>
  </body>
</html>
