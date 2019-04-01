<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Post::class, function (Faker $faker) {
    $title = $faker->word;

    return [
        'title' => $title,
        'body' => $faker->sentence,
        'slug' => slug($title),
        'category_id' => factory(App\Models\Category::class),
        'thumbnail' => $faker->imageUrl(100, 100),
        'banner'=> $fker->imageUrl(640, 480)
    ];
});
