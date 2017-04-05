@extends('layouts.app')

@section('content')
<style type="text/css">
h1 {
  line-height: 72px;
  margin: 24px 0;
  color:White;
}

h6{
  line-height:24px;
  color: #fc3565;
}

h6 span{
  color:white;
  float:right;
}

p {
  line-height: 24px;
  margin: 24px 0;
  color:#bbbbc4;
}

</style>

@foreach ($blogs as $i => $blog)
    @foreach($users as $i => $user)
      @if($blog{'user_id'} == $user{'_id'})
        <div class="container clearTop">
        <h1>{{ $blog{'title'} }}</h1>
        <h6>Tagged:
         @foreach($blog{'tags'} as $tag => $t)
          {{$t}},
         @endforeach
          <span class="pull-right">29th February, 2016</span></h6>
          {!! $blog{'content'} !!}
        </div>
      @endif
    @endforeach
  @endforeach

@endsection
