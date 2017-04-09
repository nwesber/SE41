<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Comment;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Collection;
use Jenssegers\Mongodb\Eloquent\Model as Model;
use Illuminate\Support\Facades\Auth;
use Redis;
use Cache;
use App\User;
use Carbon;
use DateTime;
class UserController extends Controller{

  public function myProfile($id){
    dd('profile');
  }

}
