<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SoftwareTest extends TestCase
{
    public function testCreateNewSoftware()
    {

        $randomString = str_random(10);

        $this->visit('/software/create')
              ->type($randomString, 'software_name')
              ->press('Create')
              ->seePageIs('/software');
    }
}