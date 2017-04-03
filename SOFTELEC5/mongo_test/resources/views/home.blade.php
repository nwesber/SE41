@extends('layouts.app')

@section('content')




<div class="container clearTop">
  @foreach ($blogs as $i => $blog)
    @foreach($users as $i => $user)
      @if($blog{'user_id'} == $user{'_id'})
        <div class="blog-card" style="margin-top: 30px;">
          <div class="photo photo1"></div>
          <ul class="details">
            <li class="author"><a href="#">{{ $user{'name'} }}</a></li>

            <li class="date"> {{ $blog{'created_at'}  }}</li>
            <li class="tags">
              <ul>
                @foreach($blog{'tags'} as $tag => $t)
                <li><a href="#">{{$t}}</a></li>
                @endforeach
              </ul>
            </li>
          </ul>
          <div class="description">
            <h1>{{ $blog{'title'} }}</h1>
            <h2>{{ $blog{'short_content'} }}</h2>
            <p class="summary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad eum dolorum architecto obcaecati enim dicta praesentium, quam nobis! Neque ad aliquam facilis numquam. Veritatis, sit.</p>
            <a href="#">Read More</a>
          </div>
        </div>
      @endif
    @endforeach
  @endforeach

<!-- <div class="blog-card alt">
  <div class="photo photo2"></div>
    <ul class="details">
      <li class="author"><a href="#">Jane Doe</a></li>
      <li class="date">July. 15, 2015</li>
      <li class="tags">
        <ul>
          <li><a href="#">Learn</a></li>
          <li><a href="#">Code</a></li>
          <li><a href="#">JavaScript</a></li>
        </ul>
      </li>
    </ul>
    <div class="description">
      <h1>Mastering the Language</h1>
      <h2>Java is not the same as JavaScript</h2>
      <p class="summary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad eum dolorum architecto obcaecati enim dicta praesentium, quam nobis! Neque ad aliquam facilis numquam. Veritatis, sit.</p>
      <a href="#">Read More</a>
    </div>
  </div>
</div> -->
@endsection
