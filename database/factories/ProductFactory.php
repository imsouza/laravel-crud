<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
      'name' => $faker->unique()->word,
      'price' => $faker->randomDigit,
      'description' => $faker->sentence,
      'image' => $faker->imageUrl($width = 400, $height = 200),
    ];
});
