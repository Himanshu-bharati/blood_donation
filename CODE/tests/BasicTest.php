<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class BasicTest extends TestCase
{
    
   public function testLogin()
{
    $this->visit('/login')
         ->type('smith@gmail.com', '1234')
         ->check('remember')
         ->press('login')
         ->seePageIs('/home');
}
}
