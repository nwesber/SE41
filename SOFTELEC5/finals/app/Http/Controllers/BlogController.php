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
    $blogs = Blog::all();
    $users = User::all();
    //fiding articles via tags
    /*$filteredTags = Blog::where('tags', 'MARVEL')->get();*/

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
    $blogs = Blog::create($request);
    return redirect('/');
  }

  public function myProfile(){
    dd('profile');
  }

  public function show($id){
    dd($id);
    $blogs = DB::collection('blogs')->where('_id', $id)->get();
    $users = DB::collection('users')->get();
    return view('blog.show', [
      'blogs' => $blogs,
      'users' => $users
    ]);
  }
}
