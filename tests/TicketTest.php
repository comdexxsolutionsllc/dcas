<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TicketTest extends TestCase
{
    public function testCreateNewTicket()
    {

        $randomString = str_random(10);

        $this->visit('/ticket/create')
              ->type($randomString, 'ticket_name')
              ->press('Create')
              ->seePageIs('/ticket');
    }
}