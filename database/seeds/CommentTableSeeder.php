<?php

use App\Repositories\AlbumRepository;
use App\Repositories\ArtistRepository;
use App\Repositories\CommentRepository;
use App\Repositories\PackRepository;
use App\Repositories\UserRepository;
use App\Repositories\SongRepository;
use Illuminate\Container\Container;
use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('donations')->truncate();

        // Initialize Repositories
        $comment = new CommentRepository(new Container);
        $user = new UserRepository(new Container);
        $artists = new ArtistRepository(new Container);
        $albums = new AlbumRepository(new Container);
        $packs = new PackRepository(new Container);
        $song = new SongRepository($artists, $albums, $packs);

        // Get a list of all the users
        $users = $user->all()->toArray();

        // Get the songs
        $songs = $song->all()->toArray();

        // Create a new faker object
        $faker = Faker\Factory::create();

        foreach ($users as $item) {
            // How many times we want to run it
            $run = rand(1, 15);

            // Fake it!
            for ($i = 0; $i < $run; $i++) {
                $comment->create([
                    'user_id' => $item['id'],
                    'song_id' => $songs[array_rand($songs)]['id'],
                    'comment' => $faker->sentence
                ]);
            }
        }
    }
}