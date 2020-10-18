<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        //postを参考に自分で実装
        'post_id' => App\Post::inRandomOrder()->first()->id,
        'comment' => $faker->realText(10)
    ];
});
