@extends('layouts.app')

@section('content')
<div class="container">
  <div class="panel panel-default centerForm clearCreate" style="max-width: 1000px;">
    <div class="panel-body">

      <form action="/createBlog" method="POST" class="form-horizontal uploader" enctype="multipart/form-data">
        {{ csrf_field() }}

        <div class="form-group">
          <div class="col-md-1">
            <h5><strong>Title: </strong></h5>
          </div>
          <div class="col-md-11">
            <input class="form-control"  placeholder="Title" name="title" id="title" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-1">
            <h5><strong>Tags: </strong></h5>
          </div>
          <div class="col-md-11">
            <input type="text" name="tags" id="tags" data-role="tagsinput"/>
          </div>
        </div>

        <div class="form-group">
          <div class="col-md-12">
            <h5><strong>Content: </strong></h5>
          </div>
          <div class="col-md-12">
            <textarea class="editme" cols="30" rows="10" name="content" id="content">Tell Us Your Story ...</textarea>
             <input name="image" type="file" id="upload" class="hidden" onchange="">
          </div>
        </div>


        <div class="form-group">
          <div class="col-md-12">
            <h5><strong>Thumbnail: </strong><small><br><i>*Recommended size: 600 x 315</i></small></h5>
          </div>
          <div class="col-md-12">
            <input id="file-upload" type="file" name="fileUpload" accept="image/*" required="" />

            <label for="file-upload" id="file-drag">
              <img id="file-image" src="#" alt="Preview" class="hidden">
              <div id="start">
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
          </div>
        </div>

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
