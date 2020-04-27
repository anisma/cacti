<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Genus;
use Faker\Generator as Faker;

$factory->define(Genus::class, function (Faker $faker) {
    return [
        'genus' => $faker->unique()->randomElement([
            'aeonieum',
            'aloe',
            'agaves',
            'echeveria',
            'cotyledon',
            'gasterias',
            'hawoerthia',
        ])
    ];
});
