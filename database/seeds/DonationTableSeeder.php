<?php

use App\Repositories\DonationRepository;
use App\Repositories\UserRepository;
use Illuminate\Container\Container;
use Illuminate\Database\Seeder;

class DonationTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('donations')->truncate();

        // Initialize Repository
        $donations = new DonationRepository(new Container);

        // Create a new faker object
        $faker = Faker\Factory::create();

        // Get a list of all the users
        $users = new UserRepository(new Container);
        $users = $users->all()->toArray();

        // For every user, add donations
        foreach ($users as $user) {
            // How many times we want to run it
            $run = rand(0, 3);

            // Fake it!
            for ($i = 0; $i < $run; $i++) {
                $donations->create([
                    'donation_date' => $faker->dateTime,
                    'user_id' => $user['id'],
                    'donation' => '$' . rand(5,100) . '.00',
                    'note' => $faker->sentence
                ]);
            }
        }
    }

}