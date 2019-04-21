<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RegisterTest extends TestCase
{
public function testNewCamp()
{
    $this->visit('change-password')
         ->type('123456','password')
         ->press('submit')
         ->seePageIs('/home');
}
}