@extends('layouts.app')

@section('content')
<div class="container">
   @foreach ($blogs as $i => $blog)
  <form action="/updateBlog" method="POST" class="form-horizontal uploader" enctype="multipart/form-data">
  <div class="panel panel-default centerForm clearTop" style="max-width: 1000px;">
    <div class="panel-body">
      <h4 style="display: inline-block;"><strong>Edit Article</strong></h4>
      <button class="pull-right btn btn-success " type="submit"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp; &nbsp;Update Article</button>
    </div>
  </div>

  <div class="panel panel-default centerForm" style="max-width: 1000px;">
    <div class="panel-body">


        {{ csrf_field() }}
        <input type="hidden" name="id" name="id" value="{{ $blog->id }}">
        <input type="hidden" name="meta_title" name="meta_title" value="{{ $blog->meta_title }}">
        <div class="form-group">
          <div class="col-md-1">
            <h5><strong>Title: </strong></h5>
          </div>
          <div class="col-md-11">
            <input class="form-control"  placeholder="Title" name="title" id="title" value="{{ $blog->title }}" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-1">
            <h5><strong>Summary: </strong></h5>
          </div>
          <div class="col-md-11">
            <input class="form-control"  placeholder="Summary" name="summary" id="summary" value="{{ $blog->summary }}" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-1">
            <h5><strong>Tags: </strong></h5>
          </div>
          <div class="col-md-11">
            <input type="text" name="tags" id="tags" data-role="tagsinput" value="{{ $blogTag }}" />
          </div>
        </div>

        <textarea id="summernote" name="content">{!! $blog->content !!}</textarea>


        <div class="form-group">
          <div class="col-md-12">
            <div class="col-md-6">
              <h5><strong>Thumbnail: </strong><small><br><i>*Maximum image size: 5mb</i></small></h5>
              <input id="imgInp" type="file" name="fileUpload" accept="image/*" />
            </div>
            <div class="col-md-6">
              <h5><strong>Current Thumbnail:</strong></h5>
              <img class="thumbnail" style="width: 450px !important; height: 300px !important;" id="blah" src="{{ asset('images/' . $blog->image) }}">
            </div>
          </div>
        </div>
        @endforeach
      </form>

    </div>
  </div>
</div>

@endsection
