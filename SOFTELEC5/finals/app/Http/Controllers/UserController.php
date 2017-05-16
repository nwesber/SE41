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
    $userid = Auth::id();
    $blogs = Blog::where('user_id', $id)->latest()->get();
    $user = User::where('_id', $userid)->latest()->get();
    return view('profile.index', compact('blogs', 'user'));
  }

  public function userProfile($id){
    $user = User::where('_id', $id)->latest()->get();
    $blogs = Blog::where('user_id', $id)->latest()->get();
    return view('profile.profile', compact('blogs', 'user'));
  }


  public function uploadImage(Request $request){
    $fileImage = $request->file('fileUpload');
    $destination_path = 'images/';
    $image = str_random(6).'_'.$fileImage->getClientOriginalName();
    $fileImage->move($destination_path, $image);
    $userid = Auth::id();
    DB::collection('users')->where('_id', $userid)
      ->update([
      'image' => $image
    ]);

    $notification  = array('message' => 'Image Successfully Updated!', 'alert-type' => 'success');
    return redirect('/profile/'. $userid);
  }
}
