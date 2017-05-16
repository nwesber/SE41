@extends('layouts.app')

@section('content')
  @foreach ($blogs as $i => $blog)
    @foreach($users as $i => $user)
      @if($blog->user_id == $user->_id)
        <div class="row">
          <div class="container clearTop">
             @if(Auth::guest())
              @else
                @if (Auth::user()->id == $user->_id)
                  <div class="col-md-12">
                    <div class="panel panel-default">
                      <div class="panel-body">
                        <h4 style="display: inline-block;"><strong>Article Settings</strong></h4>
                        <div class="pull-right">
                          <a href="{{ url('/article/edit/'. $blog->_id)  }}" class="btn btn-success"
                             style=" background-color: #02b875 !important; color: white;">
                             Edit Article
                          </a>
                          <a href="{{ url('/deleteBlog/'. $blog->_id)  }}" class="btn btn-danger"
                             style=" background-color: #E54B4B !important; color: white;">
                             Delete Article
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                @else
                @endif
              @endif
            <div class="col-md-9">
              <div class="panel panel-default">
                <div class="panel-body">
                  <div class="col-md-12">
                  <h3><strong>{{ $blog->title }}</strong></h3>
                  <h6>
                    @if (Auth::guest())
                      Posted By: <a href="#" data-toggle="modal" data-target="#myModal"> {{ $user->name }} </a>
                    @else
                      Posted By: <a href="{{ url('/profile/'. $user->_id)  }}"> {{ $user->name }} </a>
                    @endif
                    <span class="pull-right">
                      {{ \Carbon\Carbon::parse($blog{'created_at'})->format('dS F, Y') }}
                    </span>
                  </h6>
                  <p>{!! $blog->content !!}</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="panel panel-default" >
                <div class="panel-body">
                  <div class="tags">
                    <h5><strong>Related Tags:</strong></h5>
                    <hr>
                    @foreach($blog->tags as $tag => $t)
                      <a href="{{ url('/tagged/'. $t)  }}"><span class="tag">{{ $t }}</span></a>
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
                        <img src="{{ asset('images/' . Auth::user()->image) }}">
                      </div>
                      <form class="form" name="form" action="/comment" method="POST">
                        {{ csrf_field() }}
                        <input type="hidden" id="post_id" name="post_id" value="{{ $blog->id }}">
                        <textarea class="input" id="comment" name="comment" placeholder="Add comment..." required></textarea>
                        <input type="submit" value="Add Comment">
                      </form>
                    @endif
                  </div>

                  @foreach ($comments as $i => $comment)
                    @if($blog->id == $comment->blog_id )
                      @foreach($blog->comments as $blog_comment)
                        @if($blog_comment == $comment->id)
                          @foreach($users as $i => $user)
                            @if($user->id == $comment->user_id)
                            <div class="comment">
                              <div class="comment-avatar">
                                <img src="{{ asset('images/' . $user->image) }}">
                              </div>


                              <div class="comment-box">
                                <div class="comment-text">{{ $comment->comment }}</div>
                                <div class="comment-footer">
                                  <div class="comment-info">
                                    <span class="comment-author">
                                      @if(Auth::guest())
                                        <a href="#" data-toggle="modal" data-target="#myModal"> {{ $user->name }} </a>
                                      @else
                                        <a href="{{ url('/user/'. $user->_id)  }}">{{ $user->name }}</a>
                                      @endif
                                    </span>
                                    <span class="comment-date">{{  \Carbon\Carbon::parse( $comment->created_at )->diffForHumans() }}</span>

                                    @if(Auth::guest())
                                    @else
                                      @if(Auth::user()->id == $blog->user_id || Auth::user()->id == $comment->user_id )
                                      <span class="pull-right">
                                        <a href="{{ url('/comment/'. $comment->_id)  }}">
                                          <i class="fa fa-trash" aria-hidden="true"></i>
                                            &nbsp;&nbsp;Delete
                                        </a>
                                      </span>
                                      @else
                                      @endif
                                    @endif

                                  </div>
                                </div>
                              </div>
                            </div>
                            @endif
                          @endforeach
                        @endif
                      @endforeach
                    @endif
                  @endforeach

                </div>
              </div>
            </div>
          </div>
        </div>
      @endif
    @endforeach
  @endforeach


@endsection
