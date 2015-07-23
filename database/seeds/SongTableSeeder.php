<?php

use App\Repositories\ArtistRepository;
use App\Repositories\SongRepository;
use Illuminate\Container\Container;
use Illuminate\Database\Seeder;

class SongTableSeeder extends Seeder {

    public function run()
    {
        DB::table('songs')->truncate();

        // Initialize Repositories
        $songs = new SongRepository(new Container);
        $artists = new ArtistRepository(new Container);

        // Get all the artists
        $artists = $artists->all()->toArray();

        // Create a new faker object
        $faker = Faker\Factory::create();

        // How many times we want to run it
        $run = 150;

        // Fake it!
        for($i=0; $i < $run; $i++) {
            $songs->create([
                'artist_id' => $artists[array_rand($artists)]['id'],
                'album_id' => '',
                'genre_id' => '',
                'pack_id' => '',
                'type_id' => '',
                'user_id' => '',
                'added' => '',
                'difficulty' => '',
                'rating' => '',
                'gender' => '',
                'guitar' => '',
                'vocals' => '',
                'drums' => '',
                'bass' => '',
                'keyboard' => '',
                'pro_guitar' => '',
                'pro_vocals' => '',
                'pro_drums' => '',
                'pro_bass' => '',
                'pro_keyboard' => '',
                'album_track' => '',
                'vocal_tracks' => '',
                'year' => '',
                'length' => '',
                'cost' => '',
                'system' => '',
                'pro_mode' => '',
                'song' => $faker->sentence($NbWords = rand(2,5))
            ]);
        }
    }
}