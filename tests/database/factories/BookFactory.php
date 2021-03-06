<?php

use Faker\Generator as Faker;
use GeneaLabs\LaravelModelCaching\Tests\Fixtures\Book;

$factory->define(Book::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'description' => $faker->optional()->paragraphs(3, true),
        'published_at' => $faker->dateTime,
        'price' => $faker->randomFloat(2, 0, 999999),
    ];
});
