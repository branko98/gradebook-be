<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;
use App\Professor;

$factory->define(App\Professor::class, function (Faker $faker) {
    return [
        'firstName' => $faker->firstName($gender = null),
        'lastName' => $faker->lastName,
        'imgUrl' => $faker->url,
    ];
});
