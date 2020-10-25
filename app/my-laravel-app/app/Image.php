<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function post()
    {
      // belongsToの場合は、外部キーを指定しなくてもLaravelは動く
      return $this->belongsTo('App\Post');
    }
}
