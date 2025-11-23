<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    $title = $faker->sentence(mt_rand(3, 7), true);

    $bodyParagraphs = $faker->paragraphs(mt_rand(3, 6));
    $body = '';
    foreach ($bodyParagraphs as $paragraph) {
        $body .= '<p>' . $paragraph . '</p>';
    }

    return [
        'category_id' => random_int(1, 10),
        'user_id'     => random_int(1, 5),
        'title'       => $title,
        'slug'        => Str::slug($title),
        'excerpt'     => $faker->paragraph(1, true),
        'body'        => $body,
    ];
});
