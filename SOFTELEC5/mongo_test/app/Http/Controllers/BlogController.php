<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Collection;
use Jenssegers\Mongodb\Eloquent\Model as Model;
use Illuminate\Support\Facades\Auth;
use Redis;
use Cache;
use Carbon;
use DateTime;
class BlogController extends Controller{

  public function index(){
    $blogs = DB::collection('blogs')->get();
    $users = DB::collection('users')->get();
    return view('home', [
      'blogs' => $blogs,
      'users' => $users
    ]);
  }

  public function create(){
    if (Auth::check()){
      return view('blog.create');
    }else{
      return redirect('/');
    }
  }

  public function store(Request $request){
    $blogTags = [];
    $tags = $request->tags;

    $filteredTags = explode(',', trim($tags));
    foreach($filteredTags as $tag){
      $blogTags[] = $tag;
    }

    $id = Auth::id();
    $blog = new Blog;
    $blog->title = $request->title;
    $blog->short_content = $request->shortContent;
    $blog->content = $request->content;
    $blog->user_id = $id;
    $blog->deleted_at = null;
    $blog->save();

    $objectId = $blog->_id;
    DB::collection('blogs')->where('_id', $objectId)->push('tags', $blogTags);

    $blogs = DB::collection('blog')->get();
    return redirect('/');
  }

  public function myProfile(){
    dd('profile');
  }
}
