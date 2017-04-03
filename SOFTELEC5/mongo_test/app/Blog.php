<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Model;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Collection;
use Redis;
use Cache;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
class Blog extends Eloquent
{
  use SoftDeletes;
  protected $dates = ['deleted_at'];

  public function __construct(){
    $this->storage = Redis::Connection();
  }


  public static function fetchAll(){
    $result = Cache::remember('blog_posts', 10 , function(){
      return DB::collection('blogs')->get();
    });
    return $result;
  }

}
