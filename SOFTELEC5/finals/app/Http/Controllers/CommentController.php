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
class CommentController extends Controller{

  public function storeComment(Request $request){
    $comment = Comment::create($request);
    $notification  = array('message' => 'Comment Successfully Created!', 'alert-type' => 'success');
    session()->flash('notification', $notification);
    return redirect('/article/' . $request->post_id);
  }

  public function deleteComment($id){
    $comment = Comment::find($id);
    $comment->delete();
    $notification  = array('message' => 'Comment Successfully Deleted!', 'alert-type' => 'error');
    session()->flash('notification', $notification);
    DB::collection('blogs')->where('_id', $comment->blog_id)->pull('comments', $comment->id);
    return redirect('/article/' . $comment->blog_id);
  }

}
