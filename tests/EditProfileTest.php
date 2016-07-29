<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class EditProfileTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A menu test.
     *
     * @return void
     */
    public function testEditProfile()
    {
        $user = $this->createUser();

        $this->actingAs($user)
                ->visit('account')
                ->click('Edit profile')
                ->seePageIs('account/edit-profile')
                ->seeInField('name', 'Jesus')
                ->type('Manuel', 'name')
                ->press('Update profile')
                ->seePageIs('account')
                ->see('Your profile has been updated')
                ->seeInDatabase('users', [
                    'email' => $user->email,
                    'name' => 'Manuel'
                ]);

    }
}
