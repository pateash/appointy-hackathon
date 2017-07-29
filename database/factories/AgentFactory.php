<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Agent::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'lattitude'=>$faker->randomFloat(8,27,27.2),
        'longitude'=>$faker->randomFloat(8,77,77.2),
    ];
});
