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
use App\User;
use Carbon;
use DateTime;
class BlogController extends Controller{

  public function index(){
    $users = User::all();
    $latestPosts = Blog::latest()->take(6)->get();
    $comics = Blog::latest()->where('tags', 'comics')->take(6)->get();
    $travel = Blog::latest()->where('tags', 'travel')->take(6)->get();
    $food = Blog::latest()->where('tags', 'food')->take(6)->get();
    $games = Blog::latest()->where('tags', 'games')->take(6)->get();
    $movies = Blog::latest()->where('tags', 'movies')->take(6)->get();
    return view('home', [
      'movies' => $movies,
      'games' => $games,
      'food' => $food,
      'travel' => $travel,
      'comics' => $comics,
      'latest' => $latestPosts,
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
    $blogs = Blog::create($request);
    return redirect('/');
  }

  public function myProfile(){
    dd('profile');
  }

  public function show($id){
    $blogs = Blog::where('_id', $id)->get();
    $users = User::all();
    return view('blog.show', [
      'blogs' => $blogs,
      'users' => $users
    ]);
  }

  public function filterTags($tag){
    dd($tag);
  }
}
