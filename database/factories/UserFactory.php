<?php

use Faker\Generator as Faker;

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'birthdate'=>$faker->date($format = 'Y-m-d', $max = 'now'),
        'salary'=>$faker->randomNumber($nbDigits = NULL, $strict = false),
        'email' => $faker->email
       
    ];
});
