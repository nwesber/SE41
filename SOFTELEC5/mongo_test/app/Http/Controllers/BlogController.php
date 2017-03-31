<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Collection;
use Jenssegers\Mongodb\Eloquent\Model as Model;
use Redis;
use Cache;

class BlogController extends Controller{

  public function index(){
    return view('blog.index');
  }

  public function create(){
    return view('blog.create');
  }

  public function store(Request $request){

  }
}
