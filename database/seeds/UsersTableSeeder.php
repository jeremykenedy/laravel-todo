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

		// CLEAR THE TABLE
		DB::table('users')->delete();

		// ADD SOME DATA
		$users = array(
			['name' => 'Phillip Fry','email' => 'jeremykenedy@gmail.com','password' => Hash::make('secret')],
			['name' => 'Bender Rodriguez','email' => 'jeremy@jeremykenedy.com','password' => Hash::make('secret')],
			['name' => 'Hermes Conrad','email' => 'jeremy@consultjeremy.com','password' => Hash::make('secret')],
			['name' => 'Hubert Farnsworth','email' => 'jeremyekenedy@gmail.com','password' => Hash::make('secret')],
		);

		// INSERT THE DATA
		foreach ($users as $user)
		{
			User::create($user);
		}
	}
}
