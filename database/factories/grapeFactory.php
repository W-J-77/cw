<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\grape;
use Faker\Generator as Faker;

$factory->define(grape::class, function (Faker $faker) {
    return [
      'name'=>$faker->firstName(),
      'number'=>$faker->numberBetween(0,100),
      'color'=>$faker->randomElement(['black','red','green','purple']),
      'stall_id'=>App\Stall::inRandomOrder()->first()->id,
    ];
});
