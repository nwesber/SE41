@extends('layouts.app')

@section('content')
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






@endsection
