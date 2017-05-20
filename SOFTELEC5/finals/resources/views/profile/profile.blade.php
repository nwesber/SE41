@extends('layouts.app')

@section('content')

<div class="container clearTop">
  <div class="col-md-12">
    <div class="col-md-3">
      <div class="clearTopSmall"></div>
      <div class="panel panel-default">
        <div class="panel-body">

        @foreach ($user as $i => $profile)
          <div class="user-pic" style="background-image: url('/images/{{ $profile->image }}')" ></div>
          <h3 class="text-center"><strong>{{ $profile->name }}</strong></h3>
          <h5 class="text-center"><i class="fa fa-envelope"></i>&nbsp;&nbsp;<strong>{{ $profile->email }}</strong></h5>
        @endforeach
        </div>
      </div>
    </div>
    <div class="col-md-9">
      <div class="clearTopSmall"></div>
      <div class="panel panel-default">
        <div class="panel-body">
          <h3><strong>Latest Posts: </strong></h3>
          <hr>

         @forelse ($blogs as $i => $blog)
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
                  <h4 align="justify">{{  $blog->summary }}</h4>
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

           @empty
              @foreach ($user as $i => $profile)
                <p align="center">{{ $profile->name }} hasn’t been active on Large yet. Check back later to see their stories.</p>
              @endforeach


          @endforelse
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
