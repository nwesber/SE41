@extends('layouts.app')

@section('content')

<div class="container clearTop">
  <div class="site__wrapper">
    <h3 style="color: #02b875;"><strong>Latest Post</strong></h3>
    @foreach ($blogs as $i => $blog)
      @foreach($users as $i => $user)
        @if($blog->user_id == $user->_id)
          <div class="grid">
            <div class="card">
              <div class="card__image">
                <img class="img-responsive" src="{{ asset('images/' . $blog->image) }}" alt="" style="width: 777px; height: 300px;">
                <div class="card__overlay card__overlay--black">
                  <div class="card__overlay-content">
                    <ul class="card__meta">
                      @foreach($blog->tags as $tag => $t)
                      <li><a href="#"><i class="fa fa-tag"></i> {{$t}}</a></li>
                      @break;
                      @endforeach
                      <li><i class="fa fa-clock-o"></i> {{ \Carbon\Carbon::parse($blog{'created_at'})->diffForHumans() }}</li>
                    </ul>
                    <a href="#0" class="card__title">{{ $blog->title }}</a>
                    <ul class="card__meta card__meta--last">
                      <li><a href="#0"><i class="fa fa-user"></i> {{ $user->name }}</a></li>
                      <li><a href="#0">Read More</li>
                      <li><a href="#0"><i class="fa fa-facebook-square"></i> Share</a></a></li>
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
