@extends('layouts.app')

@section('content')
<div class="clearTop"></div>
<div class="container">
  <div class="panel panel-default">
    <div class="panel-body">


      <div id="froala-editor" name="content">
      <button type="submit" class="btn btn-primary" value="Submit">
        <i class="fa fa-floppy-o" aria-hidden="true"></i>
        &nbsp; &nbsp;Save Event
      </button>

      </div>

    </div>
  </div>
</div>
@endsection
