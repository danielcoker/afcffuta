<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Category::class, function (Faker $faker) {
    $title = $faker->word;

    return [
        'title' => $title,
        'slug' => slug($title)
    ];
});
