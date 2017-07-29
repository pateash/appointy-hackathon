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

$factory->define(App\Order::class, function (Faker $faker) {
    static $password;

    return [
        'item' => $faker->company,
        'user_id'=>$faker->numberBetween(0,100),
        'agent_id'=>$faker->numberBetween(0,50),
        'price'=>$faker->numberBetween(10,5000)
    ];
});
