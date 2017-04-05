@extends('layouts.app')

@section('content')
<div class="clearTop"></div>
<div class="container">
  <div class="panel panel-default centerForm clearCreate" style="max-width: 700px;">
    <div class="panel-body">

      <form action="/createBlog" method="POST" class="form-horizontal uploader">
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
          <div class="col-md-3">
            <h5><strong>Short Description: </strong></h5>
          </div>
          <div class="col-md-9">
            <input class="form-control"  placeholder="Short Description" name="shortContent" id="shortContent" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-1">
            <h5><strong>Tags: </strong></h5>
          </div>
          <div class="col-md-11">
            <input type="text" name="tags" id="tags" data-role="tagsinput"  placeholder="tags" />
          </div>
        </div>

        <div class="form-group">
          <div class="col-md-12">
            <h5><strong>Summary: </strong><small><i>(max 80 characters)</i> </small></h5>
          </div>
          <div class="col-md-12">
            <textarea style="width: 100%; height: 80px;" name="summary" id="summary" maxlength="50">Summary</textarea>
          </div>
        </div>

        <div class="form-group">
          <div class="col-md-12">
            <h5><strong>Content: </strong></h5>
          </div>
          <div class="col-md-12">
            <textarea class="editme" name="content" id="content">Tell Us Your Story ...</textarea>
          </div>
        </div>


        <div class="form-group">
          <div class="col-md-12">
            <h5><strong>Upload a File: </strong></h5>
          </div>
          <div class="col-md-12">
            <input id="file-upload" type="file" name="fileUpload" accept="image/*" />

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
