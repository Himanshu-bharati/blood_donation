<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class BasicTest extends TestCase
{
public function testLogin()
{
    $this->visit('/login')
         ->type('smith@gmail.com', 'email')
         ->type('123456', 'password')
         ->check('remember')
         ->press('login')
         ->seePageIs('/home');
}

public function testNewCamp()
{
    $this->visit('camp/new')
         ->type('bloodcamp', 'details')
         ->type('vizag', 'city')
         ->type('Vishakapatnam', 'district')
         ->type('AndhraPradesh', 'state')
         ->type('2019-04-16 03:00', 'start')
         ->type('2019-04-16 03:00', 'end')
         ->press('submit')
         ->seePageIs('/camp');
}
}
