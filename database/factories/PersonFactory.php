<?php

use Faker\Generator as Faker;

$factory->define(App\Person::class, function (Faker $faker) {
    return [
        //
        'name_first' => $faker->firstName,
        'name_middle' => $faker->firstName,
        'name_last' => $faker->lastName,
        'email' => $faker->email, 
        'phone_number' => $faker->phoneNumber,
        'created_at' => $faker->dateTimeBetween($startDate = '-10 years', $endDate = '-3 years'),
        'updated_at' => $faker->dateTimeBetween($startDate = '-10 years', $endDate = '-3 years'),
        'deleted_at' => $faker->randomElement($array = array ($faker->dateTimeBetween($startDate = '-3 years', $endDate = 'now'),null))
    ];
});
