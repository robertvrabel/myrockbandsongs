<?php

use App\Repositories\UserRepository;
use Illuminate\Container\Container;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->truncate();

        // Initialize Repository
        $users = new UserRepository(new Container);

        // Create a new faker object
        $faker = Faker\Factory::create();

        // How many times we want to run it
        $run = 25;

        // Fake it!
        for ($i = 0; $i < $run; $i++) {
            $users->create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => bcrypt('password')
            ]);
        }

        // Admin Test Account
        $users->create([
            'name' => 'Admin Account',
            'email' => 'admin@myrockbandsongs.com',
            'password' => bcrypt('password')
        ]);

        // Demo Test Account
        $users->create([
            'name' => 'Demo Account',
            'email' => 'demo@myrockbandsongs.com',
            'password' => bcrypt('password')
        ]);
    }
}