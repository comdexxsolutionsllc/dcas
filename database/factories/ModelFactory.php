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
        'password' => $password ? : $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});


$factory->define(DCASDomain\Models\Machine::class, function (Faker\Generator $faker) {
    return [
        'type_id' => $faker->numberBetween(0, 25),
        'user_id' => $faker->numberBetween(0, 25),
        'location_id' => $faker->numberBetween(0, 25),
        'machine_name' => str_random(25),
    ];
});


// Begin Machine Factory

$factory->define(App\Machine::class, function (Faker\Generator $faker) {
    return [
        'machine_name' => $faker->unique()->word,

    ];
});

// End Machine Factory

// Begin Software Factory

$factory->define(App\Software::class, function (Faker\Generator $faker) {
    return [
        'software_name' => $faker->unique()->word,

    ];
});

// End Software Factory

// Begin Ticket Factory

$factory->define(App\Ticket::class, function (Faker\Generator $faker) {
    return [
        'ticket_name' => $faker->unique()->word,

    ];
});

// End Ticket 

$factory->define(DCASDomain\Models\Ticket::class, function (Faker\Generator $faker) {
    return [
        'user_id' =>  $faker->randomNumber() ,
        'status_id' =>  $faker->randomNumber() ,
        'ticket_content' =>  $faker->text ,
        'ticket_read' =>  $faker->boolean ,
    ];
});

$factory->define(DCASDomain\Models\Software::class, function (Faker\Generator $faker) {
    return [
        'software_name' =>  $faker->word ,
        'software_key' =>  $faker->word ,
    ];
});

