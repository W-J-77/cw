<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Stall;
use Faker\Generator as Faker;

$factory->define(Stall::class, function (Faker $faker) {
    return [
        //
        'name'=>$faker->firstName(),
    ];
});
