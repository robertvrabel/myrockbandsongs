<?php

use App\Repositories\SongRepository;
use App\Repositories\UserRepository;
use Illuminate\Container\Container;
use Illuminate\Database\Seeder;

class SongUserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('song_user')->truncate();

        // Initialize Repositories
        $song = new SongRepository(new Container);
        $user = new UserRepository(new Container);

        // Get a list of users
        $users = $user->all()->toArray();

        // Get a list of songs
        $songs = $song->all()->toArray();

        // Create a new faker object
        $faker = Faker\Factory::create();

        // How many times we want to run it
        $run = 15;

        foreach((array)$users as $item)
        {
            // Find this user
            $user->find($item['id']);

            // The songs we are going to sync
            $user_songs = [];

            for($i=0; $i < $run; $i++) {
                $user_songs[$songs[array_rand($songs)]['id']] = ['pro_mode' => rand(0,1)];
            }

            $user->syncSongs($user_songs);
        }

    }
}