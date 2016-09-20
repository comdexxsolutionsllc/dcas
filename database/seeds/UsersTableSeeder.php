<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $faker = Faker::create();

        foreach (range(1, 500) as $index) {
            App\User::create([
                'username' => $faker->userName,
                'email' => $faker->email,
                'password' => bcrypt('secret'),
                'salt' => '',
                'register_ip' => $faker->ipv4,
                'forget_token' => null,
                'active_token' => null
            ]);
        }
    }

}
