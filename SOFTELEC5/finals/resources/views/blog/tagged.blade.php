@extends('layouts.app')

@section('content')
<div class="container clearTop">
  <div class="site__wrapper">
    <p style="margin-bottom: 0px; color: rgba(0,0,0,.44); font-size: 16px;">Tagged In</p>
    <h2 style="margin-top: 0px; color: black;"><strong>{{ $tags }}</strong></h2>
    <hr>
    <h4 style="color: black; font-size: 24px; font-weight: 300px; line-height: 1.4;">Latest Stories</h4>
     @foreach ($resultTags as $i => $recent)
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

                    <li><i class="fa fa-clock-o"></i> {{ \Carbon\Carbon::parse($recent->created_at)->format('M-d-Y') }}</li>
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
</div>
@endsection
