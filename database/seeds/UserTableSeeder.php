<?php

use App\Repositories\BookletRepository;
use App\Repositories\UserRepository;
use Illuminate\Container\Container;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->truncate();

        // Initialize Repositories
        $users = new UserRepository(new Container);
        $booklets = new BookletRepository(new Container);

        // Get the timezones
        $timezones = $users->getTimezones();

        // Get the systems
        $systems = $booklets->getSystems();

        // Get the instruments
        $instruments = $booklets->getRegularInstruments();

        // Create a new faker object
        $faker = Faker\Factory::create();

        // How many times we want to run it
        $run = 25;

        // Fake it!
        for ($i = 0; $i < $run; $i++) {

            // Force an Admin account
            $is_admin = ($i == 0) ? 1 : 0;
            $user_name = ($i == 0) ? 'Admin' : $faker->userName;
            $email = ($i == 0) ? 'admin@myrockbandsongs.com' : $faker->email;
            $first_name = ($i == 0) ? 'Admin' : $faker->firstName;
            $last_name = ($i == 0) ? 'Account' : $faker->lastName;

            $users->create([
                'last_login' => '',
                'is_admin' => $is_admin,
                'receive_emails' => rand(0, 1),
                'show_beatles' => rand(0, 1),
                'show_rbnetwork' => rand(0, 1),
                'year_born' => rand(1950, date('Y')),
                'first_name' => $first_name,
                'last_name' => $last_name,
                'email' => $email,
                'password' => bcrypt('password'),
                'user_name' => $user_name,
                'gamer_tag' => $faker->userName,
                'psnname' => $faker->userName,
                'wii_friend_code' => rand(10000000000, 20000000000),
                'has_donated' => '$' . rand(5, 100) . '.00',
                'time_zone' => array_rand($timezones),
                'where_songs' => array_rand($systems),
                'preferred_instrument' => array_rand($instruments)
            ]);
        }
    }
}