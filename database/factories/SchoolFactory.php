<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\School;
use Faker\Generator as Faker;

$factory->define(School::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'codigoCentro' => $faker->uuid,
        'logo' => $faker->imageUrl($width=50, $height=50)
    ];
});
