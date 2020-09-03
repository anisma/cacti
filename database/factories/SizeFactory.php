<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Size;
use Faker\Generator as Faker;

$factory->define(Size::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->randomElement([
            '2 inch',
            '4 inch',
            '6 inch'
        ])
    ];
});