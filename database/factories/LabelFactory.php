<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Label;
use Faker\Generator as Faker;

$factory->define(Label::class, function (Faker $faker) {
    return [
        //
        'name'=>$faker->firstName(),
        'code'=>$faker->randomElement(['789456','456123','123789','741852']),
        'grape_id'=>App\grape::inRandomOrder()->first()->id,
    ];
});
