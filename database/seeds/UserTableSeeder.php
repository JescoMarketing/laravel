<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();

    	factory(App\User::class)->create([
        	'name' => 'Jesus',
            'username' => 'castaneda',
        	'email' => 'jesus@test.com',
        	'password' => bcrypt('secret'),
        	'role' => 'admin',
            'active' => true
        ]);
        factory(App\User::class, 49)->create();
    }
}