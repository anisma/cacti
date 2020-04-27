<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Image;
use App\Product;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;


$factory->define(Image::class, function (Faker $faker) {
    return [
        'image' => $faker->randomElement([
            'image1.jpg',
            'image2.jpg',
            'image3.jpg',
            'image4.jpg',
            'image5.jpg',
            'image6.jpg',
            'image7.jpg',
            'image8.jpg',
            'image9.jpg',
            'image10.jpg',
            'image11.jpg',
            ])
    ];
});
