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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'type' => $faker->type,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});
$factory->define(App\Student::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->name,
        'contact' => $faker->type,
        'email' => $faker->unique()->safeEmail,
        'result' => $faker->result,
        'batch_id' => $faker->batch_id,
        'course_id' => $faker->course_id,
    ];
});
