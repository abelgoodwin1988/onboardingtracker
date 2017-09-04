<?php

use Faker\Generator as Faker;

$factory->define(App\Person::class, function (Faker $faker) {
    return [
        //
        'name_first' => $faker->firstName,
        'name_middle' => $faker->firstName,
        'name_last' => $faker->lastName,
        'email' => $faker->email,
        'phone_number' => $faker->phoneNumber
    ];
});
