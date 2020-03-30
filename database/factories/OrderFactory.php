<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use Faker\Generator as Faker;

$factory->define(\App\Order::class, function (Faker $faker) {
    return [
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime
    ];
});
