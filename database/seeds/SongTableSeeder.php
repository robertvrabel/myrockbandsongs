<?php

use App\Repositories\AlbumRepository;
use App\Repositories\ArtistRepository;
use App\Repositories\GenreRepository;
use App\Repositories\PackRepository;
use App\Repositories\SongRepository;
use App\Repositories\TypeRepository;
use App\Repositories\UserRepository;
use Illuminate\Container\Container;
use Illuminate\Database\Seeder;

class SongTableSeeder extends Seeder {

    public function run()
    {
        DB::table('songs')->truncate();

        // Initialize Repositories
        $songs = new SongRepository(new Container);
        $artists = new ArtistRepository(new Container);
        $albums = new AlbumRepository(new Container);
        $genres = new GenreRepository(new Container);
        $packs = new PackRepository(new Container);
        $types = new TypeRepository(new Container);
        $users = new UserRepository(new Container);

        // Get all the artists
        $artists = $artists->all()->toArray();

        // Get all the albums
        $albums = $albums->all()->toArray();

        // Get all the genres
        $genres = $genres->all()->toArray();

        // Get all the packs
        $packs = $packs->all()->toArray();

        // Get all the types
        $types = $types->all()->toArray();

        // Get all the users
        $users = $users->all()->toArray();

        // Get the difficulties
        $difficulties = $songs->getDifficulties();

        // Get the ratings
        $ratings = $songs->getRatings();

        // Get the genders
        $genders = $songs->getGenders();

        // Get the costs
        $costs = $songs->getCosts();

        // Get the systems
        $systems = $songs->getSystems();

        // Create a new faker object
        $faker = Faker\Factory::create();

        // How many times we want to run it
        $run = 150;

        // Fake it!
        for($i=0; $i < $run; $i++) {
            $songs->create([
                'artist_id' => $artists[array_rand($artists)]['id'],
                'album_id' => $albums[array_rand($albums)]['id'],
                'genre_id' => $genres[array_rand($genres)]['id'],
                'pack_id' => $packs[array_rand($packs)]['id'],
                'type_id' => $types[array_rand($types)]['id'],
                'user_id' => $users[array_rand($users)]['id'],
                'added' => $faker->date('Y-m-d'),
                'rating' => array_rand($ratings),
                'gender' => array_rand($genders),
                'difficulty' => $difficulties[array_rand($difficulties)],
                'guitar' => $difficulties[array_rand($difficulties)],
                'vocals' => $difficulties[array_rand($difficulties)],
                'drums' => $difficulties[array_rand($difficulties)],
                'bass' => $difficulties[array_rand($difficulties)],
                'keyboard' => $difficulties[array_rand($difficulties)],
                'pro_guitar' => $difficulties[array_rand($difficulties)],
                'pro_vocals' => $difficulties[array_rand($difficulties)],
                'pro_drums' => $difficulties[array_rand($difficulties)],
                'pro_bass' => $difficulties[array_rand($difficulties)],
                'pro_keyboard' => $difficulties[array_rand($difficulties)],
                'album_track' => $difficulties[array_rand($difficulties)],
                'vocal_tracks' => $difficulties[array_rand($difficulties)],
                'year' => rand(1950, date("Y")),
                'length' => '0' . rand(1,9) . ':' . rand(10, 59),
                'cost' => $costs[array_rand($costs)],
                'system' => $systems[array_rand($systems)],
                'song' => $faker->sentence($NbWords = rand(2,5))
            ]);
        }
    }
}