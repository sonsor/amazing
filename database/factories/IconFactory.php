<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Icon;
use Faker\Generator as Faker;

$factory->define(Icon::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'slug' => str_replace('--', '-', strtolower(preg_replace('/[^a-zA-Z0-9]/', '-', trim($faker->name)))),
        'classes' => $faker->name,
        'shortDescription' => $faker->sentence(4),
        'description' => $faker->sentence(100),
        'version' => '1.0.0',
        'paid' => false
    ];
});
