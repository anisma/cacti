<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Size;
use App\Color;
use App\Genus;
use App\Image;
use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    $color = Color::all();
    $genus = Genus::all();
    $size = Size::all();
    $image = Image::all();

    return [
        'name' => $faker->unique()->name,
        'description' => $faker->paragraph(15, true),
        'price' => $faker->randomElement([
            '45000',
            '50000',
            '75000',
            '100000'
        ]),
        'stock' => $faker->randomDigit,
        'discount' => '0',
        'sold' => $faker->randomDigit,
        'genus_id' => $faker->randomElement($genus),
        'color_id' => $faker->randomElement($color),
        'size_id' => $faker->randomElement($size),
    ];
});
