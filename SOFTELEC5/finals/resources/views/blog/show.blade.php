@extends('layouts.app')

@section('content')

  @foreach ($blogs as $i => $blog)
    @foreach($users as $i => $user)
      @if($blog->user_id == $user->_id)
        <div class="row">
          <div class="container clearTop">
            <div class="col-md-9">
              <div class="panel panel-default">
                <div class="panel-body">
                  <h3><strong>{{ $blog->title }}</strong></h3>
                  <h6>
                    Posted By: <a href="{{ url('/profile/'. $user->_id)  }}"> {{ $user->name }} </a>
                    <span class="pull-right">
                      {{ \Carbon\Carbon::parse($blog{'created_at'})->format('dS F, Y') }}
                    </span>
                  </h6>
                  <p>{!! $blog->content !!}</p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              @if(Auth::guest())
              @else
                @if (Auth::user()->id == $user->_id)
                <div>
                  <button class="btn btn-success" style="width: 100%;">Article Settings</button>
                  <div style="margin-bottom: 20px;"></div>
                </div>
                @else
                @endif
              @endif
              <div class="panel panel-default" >
                <div class="panel-body">
                  <div class="tags">
                    <h5><strong>Related Tags:</strong></h5>
                    <hr>
                    @foreach($blog->tags as $tag => $t)
                      <a href="#"><span class="tag">{{ $t }}</span></a>
                    @endforeach
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="container">
            <div class="col-md-12">
              <div class="panel panel-default" >
                <div class="panel-body">
                  <div class="comment-form">
                    @if (Auth::guest())
                      <div class="text-center">
                        <a href="#" data-toggle="modal" data-target="#myModal">Login/Register</a> to Comment on this Article.
                      </div>
                    @else
                      <div class="comment-avatar">
                        <img src="{{ asset('images/' . 'guest.png') }}">
                      </div>
                      <form class="form" name="form">
                        <textarea class="input" placeholder="Add comment..." required></textarea>
                        <input type="submit" value="Add Comment">
                      </form>
                    @endif
                  </div>

                  <div class="comment">
                    <div class="comment-avatar">
                      <img src="{{ asset('images/' . 'guest.png') }}">
                    </div>

                    <div class="comment-box">
                      <div class="comment-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto temporibus iste nostrum dolorem natus recusandae incidunt voluptatum.</div>
                      <div class="comment-footer">
                        <div class="comment-info">
                          <span class="comment-author">
                            <a href="mailto:sexar@pagelab.io">Sexar</a>
                          </span>
                          <span class="comment-date">Feb 2, 2013 11:32:04 PM</span>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      @endif
    @endforeach
  @endforeach


@endsection
