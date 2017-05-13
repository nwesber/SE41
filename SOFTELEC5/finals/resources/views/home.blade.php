@extends('layouts.app')

@section('content')
<div class="container clearTop">
  <div class="site__wrapper">
    <h3><strong><a href="{{ url('/tagged/'. 'recent')  }}" class="tagColor">Latest Post</a></strong></h3>
    <div class="homeMargin"></div>
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
                      <li><a href="{{ url('/tagged/'. $t)  }}"><i class="fa fa-tag"></i> {{$t}}</a></li>
                      @break;
                      @endforeach
                      <li><i class="fa fa-clock-o"></i> {{ \Carbon\Carbon::parse($recent{'updated_at'})->diffForHumans() }}</li>
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
    <h3><strong><a href="{{ url('/tagged/'. 'comics')  }}" class="tagColor">Comics</a></strong></h3>
    <div class="homeMargin"></div>
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
                      <li><a href="{{ url('/tagged/'. $t)  }}"><i class="fa fa-tag"></i> {{$t}}</a></li>
                      @break;
                      @endforeach
                      <li><i class="fa fa-clock-o"></i> {{ \Carbon\Carbon::parse($blog{'created_at'})->format('M-d-Y') }}</li>
                    </ul>
                    <a href="{{ url('/article/'. $blog->_id)  }}" class="card__title">{{ $blog->title }}</a>
                    <ul class="card__meta card__meta--last">
                      @if (Auth::guest())
                        <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-user"></i> {{ $user->name }}</a></li>
                      @else
                        <li><a href="{{ url('/profile/'. $user->_id)  }}"><i class="fa fa-user"></i> {{ $user->name }}</a></li>
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
    <h3><strong><a href="{{ url('/tagged/'. 'travel')  }}" class="tagColor">Travel</a></strong></h3>
    <div class="homeMargin"></div>
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
                      <li><a href="{{ url('/tagged/'. $t)  }}"><i class="fa fa-tag"></i> {{$t}}</a></li>
                      @break;
                      @endforeach
                      <li><i class="fa fa-clock-o"></i> {{ \Carbon\Carbon::parse($blog{'created_at'})->format('M-d-Y') }}</li>
                    </ul>
                    <a href="{{ url('/article/'. $blog->_id)  }}" class="card__title">{{ $blog->title }}</a>
                    <ul class="card__meta card__meta--last">
                      @if (Auth::guest())
                        <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-user"></i> {{ $user->name }}</a></li>
                      @else
                        <li><a href="{{ url('/profile/'. $user->_id)  }}"><i class="fa fa-user"></i> {{ $user->name }}</a></li>
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
    <h3><strong><a href="{{ url('/tagged/'. 'food')  }}" class="tagColor">Food</a></strong></h3>
    <div class="homeMargin"></div>
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
                      <li><a href="{{ url('/tagged/'. $t)  }}"><i class="fa fa-tag"></i> {{$t}}</a></li>
                      @break;
                      @endforeach
                      <li><i class="fa fa-clock-o"></i> {{ \Carbon\Carbon::parse($blog{'created_at'})->format('M-d-Y') }}</li>
                    </ul>
                    <a href="{{ url('/article/'. $blog->_id)  }}" class="card__title">{{ $blog->title }}</a>
                    <ul class="card__meta card__meta--last">
                      @if (Auth::guest())
                        <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-user"></i> {{ $user->name }}</a></li>
                      @else
                        <li><a href="{{ url('/profile/'. $user->_id)  }}"><i class="fa fa-user"></i> {{ $user->name }}</a></li>
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
    <h3><strong><a href="{{ url('/tagged/'. 'games')  }}" class="tagColor">Games</a></strong></h3>
    <div class="homeMargin"></div>
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
                      <li><a href="{{ url('/tagged/'. $t)  }}"><i class="fa fa-tag"></i> {{$t}}</a></li>
                      @break;
                      @endforeach
                      <li><i class="fa fa-clock-o"></i> {{ \Carbon\Carbon::parse($blog{'created_at'})->format('M-d-Y') }}</li>
                    </ul>
                    <a href="{{ url('/article/'. $blog->_id)  }}" class="card__title">{{ $blog->title }}</a>
                    <ul class="card__meta card__meta--last">
                      @if (Auth::guest())
                        <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-user"></i> {{ $user->name }}</a></li>
                      @else
                        <li><a href="{{ url('/profile/'. $user->_id)  }}"><i class="fa fa-user"></i> {{ $user->name }}</a></li>
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
    <h3><strong><a href="{{ url('/tagged/'. 'movies')  }}" class="tagColor">Movies</a></strong></h3>
    <div class="homeMargin"></div>
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
                      <li><a href="{{ url('/tagged/'. $t)  }}"><i class="fa fa-tag"></i> {{$t}}</a></li>
                      @break;
                      @endforeach
                      <li><i class="fa fa-clock-o"></i> {{ \Carbon\Carbon::parse($blog{'created_at'})->format('M-d-Y') }}</li>
                    </ul>
                    <a href="{{ url('/article/'. $blog->_id)  }}" class="card__title">{{ $blog->title }}</a>
                    <ul class="card__meta card__meta--last">
                      @if (Auth::guest())
                        <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-user"></i> {{ $user->name }}</a></li>
                      @else
                        <li><a href="{{ url('/profile/'. $user->_id)  }}"><i class="fa fa-user"></i> {{ $user->name }}</a></li>
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
