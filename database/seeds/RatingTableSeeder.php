<?php

use App\Repositories\AlbumRepository;
use App\Repositories\ArtistRepository;
use App\Repositories\PackRepository;
use App\Repositories\RatingRepository;
use App\Repositories\SongRepository;
use App\Repositories\UserRepository;
use Illuminate\Container\Container;
use Illuminate\Database\Seeder;

class RatingTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('ratings')->truncate();

        // Initialize Repositories
        $rating = new RatingRepository(new Container);
        $artists = new ArtistRepository(new Container);
        $albums = new AlbumRepository(new Container);
        $packs = new PackRepository(new Container);
        $song = new SongRepository($artists, $albums, $packs);
        $user = new UserRepository(new Container);

        // Get the users
        $users = $user->all()->toArray();

        // Get the songs
        $songs = $song->all()->toArray();

        // Get the ratings
        $ratings = $rating->getRatings();

        // Get the types
        $types = $rating->getTypes();

        // Create a new faker object
        $faker = Faker\Factory::create();

        // How many times we want to run it per user
        $run = 30;

        // For every user
        foreach ((array)$users as $item) {
            for ($i = 0; $i < $run; $i++) {
                // Random song id
                $random_song = $songs[array_rand($songs)]['id'];

                // For every type
                foreach ((array)$types as $key=>$type) {
                    $rating->create([
                        'song_id' => $random_song,
                        'user_id' => $item['id'],
                        'rating_type' => $key,
                        'rating' => $ratings[array_rand($ratings)]
                    ]);
                }
            }
        }
    }
}