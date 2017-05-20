@extends('layouts.app')

@section('content')
  <div class="container clearTop">
    <div class="col-md-12">
     <form method="POST" action="/searchBlog">
        {{ csrf_field() }}
        <input type="text" value="{{ $param }}" name="search" autofocus="true" class="searchView" />
      </form>

    <div style="margin-top: 20px;"></div>
    <div role="tabpanel" data-example-id="togglable-tabs">
      <ul id="myTab" class="nav nav-tabs nav-tabs-responsive" role="tablist" style="border-bottom: 0;" >
        <li role="presentation" class="active">
          <a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true"
          style="background-color: transparent; border: 0; cursor: pointer;">
            <span class="text">Stories</span>
          </a>
        </li>
        <li role="presentation" class="next">
          <a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile"
          style="background-color: transparent; border: 0; cursor: pointer;">
            <span class="text">People</span>
          </a>
        </li>
        <li role="presentation" class="next">
          <a href="#tags" role="tab" id="tags-tab" data-toggle="tab" aria-controls="tags"
           style="background-color: transparent; border: 0; cursor: pointer;">
            <span class="text">Tags</span>
          </a>
        </li>
      </ul>
      <hr/>
      <div id="myTabContent" class="tab-content">
        <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
          @foreach ($resultBlog as $i => $recent)
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
                            <li><i class="fa fa-clock-o"></i> {{ \Carbon\Carbon::parse($recent{'updated_at'})->format('M-d-Y') }}</li>
                          </ul>
                          <a href="{{ url('/article/'. $recent->_id)  }}" class="card__title">{{ $recent->title }}</a>
                          <ul class="card__meta card__meta--last">
                            @if (Auth::guest())
                              <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-user"></i> {{ $user->name }}</a></li>
                            @else
                              <li><a href="{{ url('/user/'. $user->_id)  }}"><i class="fa fa-user"></i> {{ $user->name }}</a></li>
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
        <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
          @foreach ($resultUser as $i => $user)
          <div class="comment">
            <div class="comment-avatar">
              <img src="{{ asset('images/' . 'guest.png') }}">
            </div>
            <div style="margin-left: 100px; padding-top: 10px; padding-right: 15px;">
              <h4 style="margin-bottom: 0px;"><strong><a href="{{ url('/profile/'. $user->_id)  }}">{{ $user->name }}</a></strong></h4>
            </div>
            <div style="margin-left: 100px; padding-right: 15px;">
              <p>{{ $user->email }}</p>
            </div>
          </div>

          @endforeach
        </div>
        <div role="tabpanel" class="tab-pane fade" id="tags" aria-labelledby="profile-tab">
          <div class="col-md-12">
            <div class="tags">
                @foreach ($tags as $i => $tag)
                  <a href="#"><span class="tag">{{ $tag }}</span></a>
                @endforeach
            </div>
          </div>
        </div>

      </div>
    </div>

    </div>
  </div>
@endsection
