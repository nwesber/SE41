@extends('layouts.app')

@section('content')

<div class="container clearTop">
  <div class="site__wrapper">
    <p style="margin-bottom: 0px; color: rgba(0,0,0,.44); font-size: 16px;">Handpicked by Large Staff</p>
    <h2 style="margin-top: 0px; color: black;"><strong>{{ $tags }}</strong></h2>
    <p style="margin-bottom: 0px; color: black; font-size: 16px;"><i>{{ $quote }}</i></p>
    <hr>
    <h4 style="color: black; font-size: 24px; font-weight: 300px; line-height: 1.4;">Latest Post</h4>
      <div class="grid">
        <div class="card">
          <div class="card__image">
            <img class="img-responsive homeCard" src="http://placehold.it/450x300" alt="">
            <div class="card__overlay card__overlay--black">
              <div class="card__overlay-content">
                <ul class="card__meta">

                  <li><a href="#"><i class="fa fa-tag"></i> story</a></li>

                  <li><i class="fa fa-clock-o"></i> May-21-2017</li>
                </ul>
                <a href="#" class="card__title">Test</a>
                <ul class="card__meta card__meta--last">
                  <li><a href="#"><i class="fa fa-user"></i>Barry Allen</a></li>
                  <li><a href="#">Read More</a></li>
                  <li>
                    <a href="javascript:void(0);">
                    <i class="fa fa-facebook-square"></i> Share</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

  </div>
</div>
@endsection
