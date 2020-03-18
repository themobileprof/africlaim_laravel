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

               'name'=>'Admin',

               'email'=>'admin@africlaim.com',

                'is_admin'=>'1',

               'password'=> bcrypt('9876543210'),

            ],

            [

               'name'=>'User',

               'email'=>'user@africlaim.com',

                'is_admin'=>'0',

               'password'=> bcrypt('0123456789'),

            ],

        ];

  

        foreach ($user as $value) {

            User::create($value);

        }
    }
}
