<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Large – Read, write and share stories that matter</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="//cdnjs.cloudflare.com/ajax/libs/summernote/0.8.3/summernote.css" rel="stylesheet">
    <link href="//code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" type="text/css" rel="stylesheet">
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css" type="text/css" rel="stylesheet">
    <link href="{{ asset('css/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-tokenfield.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/tokenfield-typeahead.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/blog/blogCard.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-tagsinput.css') }}" rel="stylesheet">
    <link href="{{ asset('css/blog/comment.css') }}" rel="stylesheet">
    <link href="{{ asset('css/blog/profile.css') }}" rel="stylesheet">
    <link href="{{ asset('css/pace.css') }}" rel="stylesheet">
    <link href="{{ asset('css/search.css') }}" rel="stylesheet">

    <style type="text/css">
      body.modal-open-noscroll{
        margin-right: 0px !important;
        margin-left: 0px !important;
        padding-right: 0px !important;
        padding-left: 0px !important;
        overflow: auto !important;
      }
      .modal-open-noscroll .navbar-default, .modal-open .navbar-default{
        margin-right: 0px !important;
        margin-left: 0px !important;
        padding-right: 0px !important;
        padding-left: 0px !important;
      }

      .label-info{
        background-color: #2ab27b;
      }

      .user-pic{
        margin: auto;
        border-radius: 50%;
        height: 150px;
        width: 150px;
        background-size: cover;
        background-position: center;
        background-blend-mode: multiply;
        vertical-align: middle;
        text-align: center;
        color: transparent;
        transition: all .3s ease;
        text-decoration: none;
      }

      .profile-pic {
        margin: auto;
        border-radius: 50%;
        height: 150px;
        width: 150px;
        background-size: cover;
        background-position: center;
        background-blend-mode: multiply;
        vertical-align: middle;
        text-align: center;
        color: transparent;
        transition: all .3s ease;
        text-decoration: none;
      }

      .profile-pic:hover {
        background-color: rgba(0,0,0,.5);
        z-index: 10000;
        color: #fff;
        transition: all .3s ease;
        text-decoration: none;
      }

      .profile-pic span {
        display: inline-block;
        padding-top: 4.5em;
        padding-bottom: 4.5em;
      }

      .video-container {
        position: relative;
        padding-bottom: 56.25%;
        padding-top: 30px; height: 0; overflow: hidden;
      }

      .video-container iframe,
      .video-container object,
      .video-container embed {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
      }
    </style>

    <script> window.Laravel = {!! json_encode([ 'csrfToken' => csrf_token(), ]) !!}; </script>
  </head>
  <body>
    <div id="app">
      <div class="navbar navbar-default navbar-fixed-top navsettings">
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
            @if (Auth::guest())
               <li><a href="#" class="btn btn-default btn-xs navbtn"
               data-toggle="modal" data-target="#myModal"><strong>Get Started</strong></a></li>
            @else
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                  {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
                  <li> <a href="{{ url('/user/'. Auth::user()->id)  }}">Profile</a>
                  <li> <a href="{{ route('blog.create') }}">New Story</a>
                  <li>
                    <a href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
                      Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="logoutForm">
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
              <li><a href="{{ url('/topic/'. 'comics')  }}">COMICS</a></li>
            </ul>
            @if (Auth::guest())
            @else
              <form class="searchbox" method="POST" action="/searchBlog">
                {{ csrf_field() }}
                <input type="search" placeholder="Search Large" name="search" class="searchbox-input" style="width: 100%;">
                <input type="submit" class="searchbox-submit" value="GO">
                <span class="searchbox-icon"></span>
              </form>
             @endif
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
                <div class="col-md-6">
                  <div class="well">
                    <form id="loginForm" method="POST" action="{{ route('login') }}"  >
                      <div class="form-group">
                        <label for="username" class="control-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email" value="" required="true" title="Please enter you username" placeholder="example@gmail.com">
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
                <div class="col-md-6">
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

      <div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog">
          <div class="modal-content">
            <form id="form" enctype="multipart/form-data" role="form" action="/uploadImage" method="POST">
               {{ csrf_field() }}

              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Upload Photo</h4>
              </div>
              <div class="modal-body">
                <div id="messages"></div>
                <input type="file" name="fileUpload" accept="image/*" id="file">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
              </div>
            </form>
          </div>
        </div>
      </div>

        @yield('content')


    </div>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/summernote/0.8.3/summernote.js"></script>
    <script src="{{ asset('js/bootstrap-tagsinput.min.js') }}"></script>
    <script src="{{ asset('js/summernote.js') }}"></script>
    <script src="{{ asset('js/fb.js') }}"></script>
    <script src="{{ asset('js/blog.js') }}"></script>
    <script src="{{ asset('js/pace.js') }}"></script>

    <script type="text/javascript">
      @if(Session::has('notification'))
        var type = "{{ Session::get('notification.alert-type', 'info') }}";
        switch(type){
          case 'info':
            toastr.info("{{ Session::get('notification.message') }}");
            break;

          case 'warning':
            toastr.warning("{{ Session::get('notification.message') }}");
            break;
          case 'success':
            toastr.success("{{ Session::get('notification.message') }}");
            break;
          case 'error':
            toastr.error("{{ Session::get('notification.message') }}");
            break;
        }
      @endif
    </script>
    <script type="text/javascript">
      $(function() {
        var submitIcon = $('.searchbox-icon');
        var inputBox = $('.searchbox-input');
        var searchBox = $('.searchbox');
        var isOpen = false;
        submitIcon.click(function() {
          if (isOpen == false) {
            searchBox.addClass('searchbox-open');
            inputBox.focus();
            isOpen = true;
          } else {
            searchBox.removeClass('searchbox-open');
            inputBox.focusout();
            isOpen = false;
          }
        });
        submitIcon.mouseup(function() {
          return false;
        });
        searchBox.mouseup(function() {
          return false;
        });
        $(document).mouseup(function() {
          if (isOpen == true) {
            $('.searchbox-icon').css('display', 'block');
            submitIcon.click();
          }
        });
      });
    </script>
    <script type="text/javascript">
      $('#readmore').click(function(){
        $('#showBlog').submit();
        return false;
      });
    </script>
  </body>
</html>
