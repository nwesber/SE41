@extends('layouts.app')

@section('content')

<div class="container clearTop">
  <div class="site__wrapper">
    <h3><strong><a href="{{ url('/topic/'. 'recent')  }}" style="color: #02b875;">Latest Post</a></strong></h3>
    <div style="margin-bottom: 40px;"></div>
    @foreach ($latest as $i => $recent)
      @foreach($users as $i => $user)
        @if($recent->user_id == $user->_id)
          <div class="grid">
            <div class="card">
              <div class="card__image">
                <img class="img-responsive homeCard" src="{{ asset('images/' . $recent->image) }}" alt="">
                <div class="card__overlay card__overlay--black">
                  <div class="card__overlay-content">
                    <ul class="card__meta">
                      @foreach($recent->tags as $tag => $t)
                      <li><a href="{{ url('/topic/'. $t)  }}"><i class="fa fa-tag"></i> {{$t}}</a></li>
                      @break;
                      @endforeach
                      <li><i class="fa fa-clock-o"></i> {{ \Carbon\Carbon::parse($recent{'created_at'})->diffForHumans() }}</li>
                    </ul>
                    <a href="{{ url('/article/'. $recent->_id)  }}" class="card__title">{{ $recent->title }}</a>
                    <ul class="card__meta card__meta--last">
                      @if (Auth::guest())
                        <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-user"></i> {{ $user->name }}</a></li>
                      @else
                        <li><a href="{{ url('/profile/'. $user->_id)  }}"><i class="fa fa-user"></i> {{ $user->name }}</a></li>
                      @endif
                      <li><a href="{{ url('/article/'. $recent->_id)  }}">Read More</a></li>
                      <li>
                        <a href="javascript:void(0);"
                           onclick="shareFacebook('{{ $recent->_id }}', 'images/{{ $recent->image }}' , '{{ $recent->title }}') ">

                        <i class="fa fa-facebook-square"></i> Share</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endif
      @endforeach
    @endforeach
  </div>

  <div class="site__wrapper">
    <h3><strong><a href="{{ url('/topic/'. 'comics')  }}" style="color: #02b875;">Comics</a></strong></h3>
    <div style="margin-bottom: 40px;"></div>
    @foreach ($comics as $i => $blog)
      @foreach($users as $i => $user)
        @if($blog->user_id == $user->_id)
          <div class="grid">
            <div class="card">
              <div class="card__image">
                <img class="img-responsive homeCard" src="{{ asset('images/' . $blog->image) }}" alt="">
                <div class="card__overlay card__overlay--black">
                  <div class="card__overlay-content">
                    <ul class="card__meta">
                      @foreach($blog->tags as $tag => $t)
                      <li><a href="{{ url('/topic/'. $t)  }}"><i class="fa fa-tag"></i> {{$t}}</a></li>
                      @break;
                      @endforeach
                      <li><i class="fa fa-clock-o"></i> {{ \Carbon\Carbon::parse($blog{'created_at'})->format('M-d-Y') }}</li>
                    </ul>
                    <a href="{{ url('/article/'. $blog->_id)  }}" class="card__title">{{ $blog->title }}</a>
                    <ul class="card__meta card__meta--last">
                      @if (Auth::guest())
                        <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-user"></i> {{ $user->name }}</a></li>
                      @else
                        <li><a href="{{ url('/article/'. $blog->_id)  }}"><i class="fa fa-user"></i> {{ $user->name }}</a></li>
                      @endif
                      <li><a href="{{ url('/article/'. $blog->_id)  }}">Read More</a></li>
                      <li>
                        <a href="javascript:void(0);"
                           onclick="shareFacebook('{{ $blog->_id }}', 'images/{{ $blog->image }}' , '{{ $blog->title }}') ">

                        <i class="fa fa-facebook-square"></i> Share</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endif
      @endforeach
    @endforeach
  </div>

  <div class="site__wrapper">
    <h3><strong><a href="{{ url('/topic/'. 'travel')  }}" style="color: #02b875;">Travel</a></strong></h3>
    <div style="margin-bottom: 40px;"></div>
    @foreach ($travel as $i => $blog)
      @foreach($users as $i => $user)
        @if($blog->user_id == $user->_id)
          <div class="grid">
            <div class="card">
              <div class="card__image">
                <img class="img-responsive homeCard" src="{{ asset('images/' . $blog->image) }}" alt="">
                <div class="card__overlay card__overlay--black">
                  <div class="card__overlay-content">
                    <ul class="card__meta">
                      @foreach($blog->tags as $tag => $t)
                      <li><a href="{{ url('/topic/'. $t)  }}"><i class="fa fa-tag"></i> {{$t}}</a></li>
                      @break;
                      @endforeach
                      <li><i class="fa fa-clock-o"></i> {{ \Carbon\Carbon::parse($blog{'created_at'})->format('M-d-Y') }}</li>
                    </ul>
                    <a href="{{ url('/article/'. $blog->_id)  }}" class="card__title">{{ $blog->title }}</a>
                    <ul class="card__meta card__meta--last">
                      @if (Auth::guest())
                        <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-user"></i> {{ $user->name }}</a></li>
                      @else
                        <li><a href="{{ url('/article/'. $blog->_id)  }}"><i class="fa fa-user"></i> {{ $user->name }}</a></li>
                      @endif
                      <li><a href="{{ url('/article/'. $blog->_id)  }}">Read More</a></li>
                      <li>
                        <a href="javascript:void(0);"
                           onclick="shareFacebook('{{ $blog->_id }}', 'images/{{ $blog->image }}' , '{{ $blog->title }}') ">

                        <i class="fa fa-facebook-square"></i> Share</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endif
      @endforeach
    @endforeach
  </div>

  <div class="site__wrapper">
    <h3><strong><a href="{{ url('/topic/'. 'food')  }}" style="color: #02b875;">Food</a></strong></h3>
    <div style="margin-bottom: 40px;"></div>
    @foreach ($food as $i => $blog)
      @foreach($users as $i => $user)
        @if($blog->user_id == $user->_id)
          <div class="grid">
            <div class="card">
              <div class="card__image">
                <img class="img-responsive homeCard" src="{{ asset('images/' . $blog->image) }}" alt="">
                <div class="card__overlay card__overlay--black">
                  <div class="card__overlay-content">
                    <ul class="card__meta">
                      @foreach($blog->tags as $tag => $t)
                      <li><a href="{{ url('/topic/'. $t)  }}"><i class="fa fa-tag"></i> {{$t}}</a></li>
                      @break;
                      @endforeach
                      <li><i class="fa fa-clock-o"></i> {{ \Carbon\Carbon::parse($blog{'created_at'})->format('M-d-Y') }}</li>
                    </ul>
                    <a href="{{ url('/article/'. $blog->_id)  }}" class="card__title">{{ $blog->title }}</a>
                    <ul class="card__meta card__meta--last">
                      @if (Auth::guest())
                        <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-user"></i> {{ $user->name }}</a></li>
                      @else
                        <li><a href="{{ url('/article/'. $blog->_id)  }}"><i class="fa fa-user"></i> {{ $user->name }}</a></li>
                      @endif
                      <li><a href="{{ url('/article/'. $blog->_id)  }}">Read More</a></li>
                      <li>
                        <a href="javascript:void(0);"
                           onclick="shareFacebook('{{ $blog->_id }}', 'images/{{ $blog->image }}' , '{{ $blog->title }}') ">

                        <i class="fa fa-facebook-square"></i> Share</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endif
      @endforeach
    @endforeach
  </div>

  <div class="site__wrapper">
    <h3><strong><a href="{{ url('/topic/'. 'games')  }}" style="color: #02b875;">Games</a></strong></h3>
    <div style="margin-bottom: 40px;"></div>
    @foreach ($games as $i => $blog)
      @foreach($users as $i => $user)
        @if($blog->user_id == $user->_id)
          <div class="grid">
            <div class="card">
              <div class="card__image">
                <img class="img-responsive homeCard" src="{{ asset('images/' . $blog->image) }}" alt="">
                <div class="card__overlay card__overlay--black">
                  <div class="card__overlay-content">
                    <ul class="card__meta">
                      @foreach($blog->tags as $tag => $t)
                      <li><a href="{{ url('/topic/'. $t)  }}"><i class="fa fa-tag"></i> {{$t}}</a></li>
                      @break;
                      @endforeach
                      <li><i class="fa fa-clock-o"></i> {{ \Carbon\Carbon::parse($blog{'created_at'})->format('M-d-Y') }}</li>
                    </ul>
                    <a href="{{ url('/article/'. $blog->_id)  }}" class="card__title">{{ $blog->title }}</a>
                    <ul class="card__meta card__meta--last">
                      @if (Auth::guest())
                        <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-user"></i> {{ $user->name }}</a></li>
                      @else
                        <li><a href="{{ url('/article/'. $blog->_id)  }}"><i class="fa fa-user"></i> {{ $user->name }}</a></li>
                      @endif
                      <li><a href="{{ url('/article/'. $blog->_id)  }}">Read More</a></li>
                      <li>
                        <a href="javascript:void(0);"
                           onclick="shareFacebook('{{ $blog->_id }}', 'images/{{ $blog->image }}' , '{{ $blog->title }}') ">

                        <i class="fa fa-facebook-square"></i> Share</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endif
      @endforeach
    @endforeach
  </div>

  <div class="site__wrapper">
    <h3><strong><a href="{{ url('/topic/'. 'movies')  }}" style="color: #02b875;">Movies</a></strong></h3>
    <div style="margin-bottom: 40px;"></div>
    @foreach ($movies as $i => $blog)
      @foreach($users as $i => $user)
        @if($blog->user_id == $user->_id)
          <div class="grid">
            <div class="card">
              <div class="card__image">
                <img class="img-responsive homeCard" src="{{ asset('images/' . $blog->image) }}" alt="">
                <div class="card__overlay card__overlay--black">
                  <div class="card__overlay-content">
                    <ul class="card__meta">
                      @foreach($blog->tags as $tag => $t)
                      <li><a href="{{ url('/topic/'. $t)  }}"><i class="fa fa-tag"></i> {{$t}}</a></li>
                      @break;
                      @endforeach
                      <li><i class="fa fa-clock-o"></i> {{ \Carbon\Carbon::parse($blog{'created_at'})->format('M-d-Y') }}</li>
                    </ul>
                    <a href="{{ url('/article/'. $blog->_id)  }}" class="card__title">{{ $blog->title }}</a>
                    <ul class="card__meta card__meta--last">
                      @if (Auth::guest())
                        <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-user"></i> {{ $user->name }}</a></li>
                      @else
                        <li><a href="{{ url('/article/'. $blog->_id)  }}"><i class="fa fa-user"></i> {{ $user->name }}</a></li>
                      @endif
                      <li><a href="{{ url('/article/'. $blog->_id)  }}">Read More</a></li>
                      <li>
                        <a href="javascript:void(0);"
                           onclick="shareFacebook('{{ $blog->_id }}', 'images/{{ $blog->image }}' , '{{ $blog->title }}') ">

                        <i class="fa fa-facebook-square"></i> Share</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endif
      @endforeach
    @endforeach
  </div>
</div>
@endsection
