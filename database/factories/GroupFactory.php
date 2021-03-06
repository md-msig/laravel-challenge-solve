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

$factory->define(App\Group::class, function (Faker\Generator $faker) {
    return [
        'name' => $this->faker->name(1,16),
        'description' => $this->faker->sentence(1,255),
    ];
});

