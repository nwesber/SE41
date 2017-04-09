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
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
class Comment extends Eloquent
{

  use SoftDeletes;
  protected $dates = ['updated_at', 'created_at', 'deleted_at'];

  public function __construct(){
    $this->storage = Redis::Connection();
  }

  public static function create(Request $request){

    $id = Auth::id();
    $comment = new Comment;
    $comment->user_id = $id;
    $comment->blog_id = $request->post_id;
    $comment->comment = $request->comment;
    $comment->save();

    $objectId = $request->post_id;
    $commentId = $comment->_id;
    DB::collection('blogs')->where('_id', $objectId)->push('comments', $commentId);

  }

  public static function fetchAll(){
    $result = Cache::remember('blog_posts', 10 , function(){
      return DB::collection('blogs')->get();
    });
    return $result;
  }

}
