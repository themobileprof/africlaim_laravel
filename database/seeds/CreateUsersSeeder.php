<?php

use Illuminate\Database\Seeder;
use App\User;

class CreateUsersSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$user = [

			[

				'firstname' => 'Admin',

				'lastname' => 'Admin',

				'email' => 'admin@africlaim.com',

				'phone' => '08012345678',

				'is_admin' => '1',

				'password' => bcrypt('9876543210'),

			],

			[

				'firstname' => 'Guest',

				'lastname' => 'Guest',

				'email' => 'guest@localhost',

				'is_admin' => '0',

				'password' => 'guest',

			],

			[

				'firstname' => 'Samuel',

				'lastname' => 'Anyaele',

				'email' => 'user@africlaim.com',

				'phone' => '08098765432',

				'is_admin' => '0',

				'password' => bcrypt('0123456789'),

			],

		];



		foreach ($user as $value) {

			User::create($value);
		}
	}
}
