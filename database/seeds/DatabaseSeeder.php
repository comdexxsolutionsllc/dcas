<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder {
    /**
     *
     * @var array
     */
    private $tables = [
        'machines',
        'users'
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $this->cleanDatabase();

        Eloquent::unguard();

        $this->call('UsersTableSeeder');
        $this->call('MachinesTableSeeder');
    }

    /**
     * Clean the database.
     * 
     * @return void
     */
    private function cleanDatabase() {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        foreach ($this->tables as $tableName) {
            DB::table($tableName)->truncate();
        }

        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }

}
