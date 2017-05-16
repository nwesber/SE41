@extends('layouts.app')

@section('content')
<div class="container">
  <form action="/createBlog" method="POST" class="form-horizontal uploader" enctype="multipart/form-data">

  <div class="panel panel-default centerForm clearTop panelSettings">
    <div class="panel-body">
      <h4 style="display: inline-block;"><strong>New Article</strong></h4>
      <button class="pull-right btn btn-success " type="submit"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp; &nbsp;Save Event</button>
    </div>
  </div>


  <div class="panel panel-default centerForm panelSettings">
    <div class="panel-body">


        {{ csrf_field() }}

        <div class="form-group">
          <div class="col-md-1">
            <h5><strong>Title: </strong></h5>
          </div>
          <div class="col-md-11">
            <input class="form-control"  placeholder="Title" name="title" id="title" required="true" />
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
          <div class="col-md-1">
            <h5><strong>Summary: </strong></h5>
          </div>
          <div class="col-md-11">
            <input class="form-control"  name="summary" id="summary" required="true" placeholder="a one-two line summary" />
          </div>
        </div>


        <textarea id="summernote" name="content"></textarea>


        <div class="form-group">
          <div class="col-md-12">
            <div class="col-md-6">
              <h5><strong>Thumbnail: </strong><small><br><i>*Maximum image size: 5mb</i></small></h5>
              <input id="imgInp" type="file" name="fileUpload" accept="image/*" required="true" />
            </div>
            <div class="col-md-6">
              <h5><strong>Preview:</strong></h5>
              <img class="thumbnail" id="blah" src="http://placehold.it/450x300">
            </div>
          </div>
        </div>
      </form>

    </div>
  </div>
</div>
@endsection
