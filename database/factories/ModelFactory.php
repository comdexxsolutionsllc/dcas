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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

//			$table->integer('type_id');
//			$table->integer('user_id');
//			$table->integer('location_id')->nullable();
//			$table->string('machine_name', 30);

$factory->define(DCASDomain\Models\Machine::class, function (Faker\Generator $faker) {
    return [
        'type_id' => $faker->numberBetween(0, 25),
        'user_id' => $faker->numberBetween(0, 25),
        'location_id' => $faker->numberBetween(0, 25),
        'machine_name' => str_random(25),
    ];
});