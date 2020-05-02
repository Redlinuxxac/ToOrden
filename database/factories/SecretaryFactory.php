<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Secretary;
use Faker\Generator as Faker;

$factory->define(Secretary::class, function (Faker $faker) {
    return [
        'name'         => $faker->name,
        'lastname1'    => $faker->lastname,
        'lastname2'    => $faker->lastname,
        'birthday'     => $faker->date,
        'sex'          => $faker->randomElement(['Masculino', 'Femenino']),
    ];
});
