<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Comment;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Collection;
use Jenssegers\Mongodb\Eloquent\Model as Model;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;
use Redis;
use Cache;
use App\User;
use Carbon;
use DateTime;
use Session;
class BlogController extends Controller{

  public function __construct(){
    $this->storage = Redis::Connection();
  }

  public function index(){
    $users = User::all();
    $latest = Blog::latest()->take(6)->get();
    $comics = Blog::latest()->where('tags', 'comics')->take(6)->get();
    $travel = Blog::latest()->where('tags', 'travel')->take(6)->get();
    $food = Blog::latest()->where('tags', 'food')->take(6)->get();
    $games = Blog::latest()->where('tags', 'games')->take(6)->get();
    $movies = Blog::latest()->where('tags', 'movies')->take(6)->get();

    //$result = Blog::where('tags', 'regex', "/". $keyword ."/i" )->get();


    return view('home', [ 'movies' => $movies, 'games' => $games, 'food' => $food, 'travel' => $travel, 'comics' => $comics, 'latest' => $latest, 'users' => $users ]);
  }

  public function create(){
    if (Auth::check()) { return view('blog.create'); }
    else{ return redirect('/'); }
  }

  public function store(Request $request){
    $blogs = Blog::create($request);
    $notification  = array('message' => 'Article Successfully Created!', 'alert-type' => 'success');
    session()->flash('notification', $notification);
    return redirect('/');
  }

  public function show($id){
    $blogs = Blog::where('_id', $id)->get();
    $comments = Comment::latest()->get();
    $users = User::all();
    return view('blog.show', compact('blogs', 'users', 'comments'));
  }

  public function update(Request $request){
    $blogs = Blog::updateArticle($request);
    $notification  = array('message' => 'Article Successfully Updated!', 'alert-type' => 'success');
    session()->flash('notification', $notification);
    return redirect('/article/'. $request->id);
  }

  public function edit($id){
    if (Auth::check()){
      $blogs = Blog::where('_id', $id)->get();
      foreach ($blogs as $blog) { $blogTag = implode(",", $blog->tags); }
      return view('blog.edit', compact('blogs', 'blogTag'));
    }
    else{ return redirect('/'); }
  }

  public function destroy($id){
    $deletedRows = Blog::deleteArticle($id);
    $notification  = array('message' => 'Article Successfully Deleted!', 'alert-type' => 'success');
    session()->flash('notification', $notification);
    return redirect('/');
  }

  public function filterTags($tag){
    dd($tag);
  }
}
