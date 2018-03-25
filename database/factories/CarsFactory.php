<?php

use Faker\Generator as Faker;

$factory->define(App\Car::class, function (Faker $faker) {
    return [
        'make' => $faker->randomElement($array = array ('Toyota','Honda','Ford')),
        'model'=> $faker->randomElement($array = array ('Classic','Luxury','Extra Luxury')),
        'year'=> $faker->year($max = 'now'),
    ];
});
