<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // 普通はここでテーブル名を定義するが、Laravelはクラスの複数形を勝手に見てくれる=posts
    // protected $table = 'posts';
    // と定義することも出来る
}
