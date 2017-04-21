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
        <div class="panel panel-default">
          <div class="panel-body">
            <p>Lorem Ipsum</p>
          </div>
        </div>

        <div class="panel panel-default">
          <div class="panel-body">
            <p>Lorem Ipsum</p>
          </div>
        </div>

        <div class="panel panel-default">
          <div class="panel-body">
            <p>Lorem Ipsum</p>
          </div>
        </div>

        <div class="panel panel-default">
          <div class="panel-body">
            <p>Lorem Ipsum</p>
          </div>
        </div>

        <div class="panel panel-default">
          <div class="panel-body">
            <p>Lorem Ipsum</p>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection