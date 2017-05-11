@extends('layouts.app')

@section('content')

<div class="container clearTop">
  <div class="col-md-12">
    <div class="col-md-3">
      <div class="clearTopSmall"></div>
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="thumbnail">
             <img class="smaller-image circle-border" src="http://shoebat.com/wp-content/uploads/2016/06/4281602-mte5ndg0mdu0odc2ntu0nzy3-1.jpg" alt="Muhammad Ali boxing">
          </div>
          <h3 class="text-center"><strong>{{ Auth::user()->name }}</strong></h3>
          <h5 class="text-center"><i class="fa fa-envelope"></i>&nbsp;&nbsp;<strong>{{ Auth::user()->email }}</strong></h5>
        </div>
      </div>
    </div>
    <div class="col-md-9">
      <div class="clearTopSmall"></div>
      <div class="panel panel-default">
        <div class="panel-body">
          <h3><strong>Latest Posts: </strong></h3>
          <hr>

          @foreach ($blogs as $i => $blog)
            <article>
              <div class="row">
                <div class="col-sm-6 col-md-4">
                  <figure>
                    <img class="thumbnail" src="{{ asset('images/' . $blog->image) }}">
                  </figure>
                </div>
                <div class="col-sm-6 col-md-8">
                  <span class="label label-default pull-right">
                    <i class="fa fa-comments" aria-hidden="true"></i>&nbsp;&nbsp;{{ count($blog->comments) }}
                  </span>
                  <h4><strong>{{  $blog->title }}</strong></h4>
                  <h4>{{  $blog->summary }}</h4>
                  <section>
                    @foreach($blog->tags as $tag => $t)
                      <a class="tagLinks" href="{{ url('/topic/'. $t)  }}">
                        <i class="fa fa-tag" aria-hidden="true"></i>&nbsp;&nbsp;{{$t}}&nbsp;&nbsp;
                      </a>
                      @break
                    @endforeach
                    <i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;&nbsp; {{ \Carbon\Carbon::parse($blog->created_at)->format('M-d-Y') }}
                    <a href="{{ url('/article/'. $blog->_id)  }}" class="btn btn-default btn-sm pull-right readMore">Read More ... </a>
                  </section>
                </div>
              </div>
            </article>
          <hr>
          @endforeach


        </div>
      </div>
    </div>
  </div>
</div>

@endsection
