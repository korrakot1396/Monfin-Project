<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'detail' => $faker->text(200),
        'user_id' => $faker->numberBetween(8, 13),
        'view_count' => $faker->numberBetween(0, 5000)
    ];
});
