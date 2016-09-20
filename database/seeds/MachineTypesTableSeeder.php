<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class MachineTypesTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $faker = Faker::create();

        foreach (range(1, 30) as $index) {
            DCASDomain\Models\MachineType::create([
                'type_name' => $faker->word
            ]);
        }
    }

}
