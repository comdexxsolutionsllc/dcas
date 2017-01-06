<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class MachineTest extends TestCase
{
    public function testCreateNewMachine()
    {

        $randomString = str_random(10);

        $this->visit('/machine/create')
              ->type($randomString, 'machine_name')
              ->press('Create')
              ->seePageIs('/machine');
    }
}