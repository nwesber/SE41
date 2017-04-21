<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Model;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use Redis;
use Auth;
use Cache;
use Carbon\Carbon;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
class Blog extends Eloquent
{
  use SoftDeletes;
  protected $dates = ['created_at', 'deleted_at', 'date_created'];

  public function __construct(){
    $this->storage = Redis::Connection();
  }

  public static function getLatestArticles(){
    return Blog::latest()->take(6)->remember(10)->get();
  }

  public static function create(Request $request){
    $blogTags = [];
    $tags = $request->tags;

    $filteredTags = explode(',', trim($tags));
    foreach($filteredTags as $tag){
      $blogTags[] = strtolower($tag);
    }

    $meta_title = Blog::seoUrl($request->title);

    $fileImage = $request->file('fileUpload');
    $destination_path = 'images/';
    $image = str_random(6).'_'.$fileImage->getClientOriginalName();
    $fileImage->move($destination_path, $image);


    $id = Auth::id();
    $blog = new Blog;
    $blog->title = $request->title;
    $blog->meta_title = $meta_title;
    $blog->content = $request->content;
    $blog->image = $image;
    $blog->user_id = $id;
    $blog->deleted_at = null;
    $blog->save();

    $objectId = $blog->_id;
    DB::collection('blogs')->where('_id', $objectId)->push('tags', $blogTags);
  }

  public static function updateArticle(Request $request){
    $blogTags = [];
    $tags = $request->tags;
    $carbon = new Carbon();
    $filteredTags = explode(',', trim($tags));
    foreach($filteredTags as $tag){
      $blogTags[] = strtolower($tag);
    }

    if($request->hasFile('fileUpload')){

      $fileImage = $request->file('fileUpload');
      $destination_path = 'images/';
      $image = str_random(6).'_'.$fileImage->getClientOriginalName();
      $fileImage->move($destination_path, $image);

      DB::collection('blogs')->where('_id', $request->id)->unset('tags');
      DB::collection('blogs')->where('_id', $request->id)
      ->update([
        'title' => $request->title,
        'content' => $request->content,
        'image' => $image,
      ]);

      DB::collection('blogs')->where('_id', $request->id)->push('tags', $blogTags);
      $blogs = Blog::where('_id', $request->id)->get();
      return $blogs;

    }else{
      DB::collection('blogs')->where('_id', $request->id)->unset('tags');
      DB::collection('blogs')->where('_id', $request->id)
      ->update([
        'title' => $request->title,
        'content' => $request->content,
      ]);

      DB::collection('blogs')->where('_id', $request->id)->push('tags', $blogTags);
      $blogs = Blog::where('_id', $request->id)->get();
      return $blogs;
    }

  }

  public static function fetchAll(){
    $result = Cache::remember('blog_posts', 10 , function(){
      return DB::collection('blogs')->get();
    });
    return $result;
  }

  public static function seoUrl($string) {
    $string = strtolower($string);
    $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
    $string = preg_replace("/[\s-]+/", " ", $string);
    $string = preg_replace("/[\s_]/", "-", $string);
    return $string;
  }

  public static function deleteArticle($id){
    $blog = Blog::find($id);
    $blog->delete();
  }

}
