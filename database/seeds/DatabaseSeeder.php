<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UsersTableSeeder::class);
         $this->call(CreateUsersSeeder::class);
         $this->command->info('Users table seeded');

         // Seed Airports and Airlines
         $path = __DIR__.'/africlaim.sql';
         DB::unprepared(file_get_contents($path));
         $this->command->info('Airports and airlines tables seeded');
         
    }
}

