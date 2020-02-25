<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Resource::class, function (Faker\Generator $faker) {
    return [
        'group_id' => \App\Group::all()->random()->id,
        'name' => str_random(10),
        'description' => str_random(30),
    ];
});
