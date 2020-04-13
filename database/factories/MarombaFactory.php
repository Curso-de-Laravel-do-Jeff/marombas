<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Repositories\Models\Maromba;
use Faker\Generator as Faker;

$factory->define(Maromba::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'age' => rand(18, 65),
        'weight' => rand(70, 130),
        'height' => rand(1.70, 2.00),
        'gender' => (rand(0, 1)?'Male':'Female')
    ];
});
