<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class LocationsTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $faker = Faker::create();

        foreach (range(1, 250) as $index) {
            DCASDomain\Models\Location::create([
                'group_id' => 0,
                'location_name' => $faker->locale,
                'location_description' => $faker->text(255)
            ]);
        }
    }

}
