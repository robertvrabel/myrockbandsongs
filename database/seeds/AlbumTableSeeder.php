<?php

use App\Repositories\AlbumRepository;
use App\Repositories\ArtistRepository;
use Illuminate\Container\Container;
use Illuminate\Database\Seeder;

class AlbumTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('albums')->truncate();

        // Initialize ArtistRepository
        $albums = new AlbumRepository(new Container);

        // Create a new faker object
        $faker = Faker\Factory::create();

        // Get a list of all the artists
        $artists = new ArtistRepository(new Container);
        $artists = $artists->all()->toArray();

        // For every artist, add albums
        foreach ($artists as $artist) {
            // How many times we want to run it
            $run = rand(1, 5);

            // Fake it!
            for ($i = 0; $i < $run; $i++) {
                $albums->create([
                    'album' => $faker->sentence,
                    'artist_id' => $artist['id'],
                ]);
            }
        }
    }
    
}