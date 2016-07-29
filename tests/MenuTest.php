<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class MenuTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A menu test.
     *
     * @return void
     */
    public function testPerfil()
    {
        //Guest user
        $this->visit('/')
             ->dontSee('Perfil');

        $user = $this->createUser();

        $this->actingAs($user)
                ->visit('/')
                ->see('Account');

        $this->click('Account')
                ->seePageIs('account')
                ->see('My account');

    }
}
