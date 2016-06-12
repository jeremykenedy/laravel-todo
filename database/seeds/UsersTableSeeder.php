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
			['id' => 1, 'name' => 'Phillip Fry', 'email' => 'jeremykenedy@gmail.com','password' => Hash::make('secret')],
			['id' => 2, 'name' => 'Bender Rodriguez', 'email' => 'jeremy@jeremykenedy.com','password' => Hash::make('secret')],
			['id' => 3, 'name' => 'Hermes Conrad', 'email' => 'jeremy@consultjeremy.com','password' => Hash::make('secret')],
			['id' => 4, 'name' => 'Hubert Farnsworth', 'email' => 'jeremyekenedy@gmail.com','password' => Hash::make('secret')],
		);

        // INSERT THE DATA
        DB::table('users')->insert($users);
	}
}
