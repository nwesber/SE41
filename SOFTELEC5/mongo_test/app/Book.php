<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Model;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;
class Book extends Model
{
  use SoftDeletes;
  protected $dates = ['deleted_at'];

  public static function deleteBook($id){
    $query = DB::collection('books')->where('_id', $id)->delete();
    return $query;
  }

}
