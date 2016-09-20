<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class MachinesTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $faker = Faker::create();

        $typeIds = \DCASDomain\Models\MachineType::pluck('id')->all();
        $userIds = App\User::pluck('id')->all();
        $locationIds = DCASDomain\Models\Location::pluck('id')->all();

        foreach (range(1, 1000) as $index) {
            DCASDomain\Models\Machine::create([
                'type_id' => $faker->randomElement($typeIds),
                'user_id' => $faker->randomElement($userIds),
                'location_id' => $faker->randomElement($locationIds),
                'machine_name' => $faker->domainName,
            ]);
        }
    }

}
