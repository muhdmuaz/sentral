<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Cases;
use Faker\Generator as Faker;

$factory->define(Cases::class, function (Faker $faker) {
    return [
        'visitor_id' => factory(App\Visitor::class),
        'title' => 'pending',
        'date' => $faker->dateTime('now','UTC'),
        'remark' => $faker->sentence,
        'status' => 'pending',
        'reff_pic' => '1'
    ];
});
