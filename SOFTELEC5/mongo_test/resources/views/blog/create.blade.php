@extends('layouts.app')

@section('content')
<div class="clearTop"></div>
<div class="container">
  <div class="panel panel-default centerForm" style="max-width: 700px;">
    <div class="panel-body">

      <form action="/createBlog" method="POST" class="form-horizontal uploader">
        {{ csrf_field() }}
        <input class="form-control"  placeholder="Title" name="title" id="title" />
        <div class="clearTopSmall"></div>


        <input type="text" class="form-control" name="tags" id="tokenfield" placeholder="#tags" />

        <div class="clearTopSmall"></div>

        <textarea name="content" id="content">Tell Us Your Story ...</textarea>

        <div class="clearTopSmall"></div>

        <input id="file-upload" type="file" name="fileUpload" accept="image/*" />

        <label for="file-upload" id="file-drag">
          <img id="file-image" src="#" alt="Preview" class="hidden">
          <div id="start">
            <i class="fa fa-download" aria-hidden="true"></i>
            <div>Select a file or drag here</div>
            <div id="notimage" class="hidden">Please select an image</div>
            <span id="file-upload-btn" class="btn btn-primary">Select a file</span>
          </div>
          <div id="response" class="hidden">
            <div id="messages"></div>
            <progress class="progress" id="file-progress" value="0">
              <span>0</span>%
            </progress>
          </div>
        </label>


        <div class="clearTopSmall"></div>
        <button type="submit" class="btn btn-primary clearTopSmall" value="Submit">
          <i class="fa fa-floppy-o" aria-hidden="true"></i>
          &nbsp; &nbsp;Save Event
        </button>
      </form>

    </div>
  </div>
</div>
@endsection
