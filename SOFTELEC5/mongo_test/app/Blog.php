<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Model;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Collection;
use Redis;
use Cache;
class Blog extends Model
{
  use SoftDeletes;
  protected $dates = ['deleted_at'];

  public function __construct(){
    $this->storage = Redis::Connection();
  }


  public static function fetchAll(){
    $result = Cache::remember('blog_posts_cache', 1 , function(){
      return DB::collection('books')->get();
    });
    return $result;
  }

}