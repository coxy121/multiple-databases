<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
	/**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$user = factory(App\User::class)->create();

    	factory(App\UserType::class)->create(['user_id' => $user->id]);
    }

}