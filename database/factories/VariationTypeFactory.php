<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\VariationType;
use Faker\Generator as Faker;

$factory->define(VariationType::class, function (Faker $faker) {
    return [
        'name' => $faker->word(1),
        'slug' => str_replace('--', '-', strtolower(preg_replace('/[^a-zA-Z0-9]/', '-', trim($faker->name))))
    ];
});
