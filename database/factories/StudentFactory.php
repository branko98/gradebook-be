<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;
use App\Student;

$factory->define(App\Student::class, function (Faker $faker) {
    return [
        'firstName' => $faker->firstName($gender = null),
        'lastName' => $faker->lastName,
        'gradebook_id' => 4,
    ];
});

