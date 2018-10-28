<?php

use Faker\Generator as Faker;

$factory->define(App\car::class, function (Faker $faker) {
    return [

        'Make' => $faker->randomElement($array = array ('Ford','Honda','Toyota')),
        'Model' => $faker->randomElement($array = array ('Hatchback','Sedan','SUV')),
        'Year'=> $faker->year($max='now'),

    ];
});
