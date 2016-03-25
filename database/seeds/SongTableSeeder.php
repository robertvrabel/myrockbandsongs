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
        $artists = new ArtistRepository(new Container);
        $albums = new AlbumRepository(new Container);
        $genres = new GenreRepository(new Container);
        $packs = new PackRepository(new Container);
        $types = new TypeRepository(new Container);
        $users = new UserRepository(new Container);
        $songs = new SongRepository($artists, $albums, $packs);

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

        // Get the album tracks
        $album_tracks = $songs->getAlbumTracks();

        // Get the vocal tracks
        $vocal_tracks = $songs->getVocalTracks();

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
                'difficulty' => array_rand($difficulties),
                'guitar' => array_rand($difficulties),
                'vocals' => array_rand($difficulties),
                'drums' => array_rand($difficulties),
                'bass' => array_rand($difficulties),
                'keyboard' => array_rand($difficulties),
                'pro_guitar' => array_rand($difficulties),
                'pro_vocals' => array_rand($difficulties),
                'pro_drums' => array_rand($difficulties),
                'pro_bass' => array_rand($difficulties),
                'pro_keyboard' => array_rand($difficulties),
                'album_track' => array_rand($album_tracks),
                'vocal_track' => array_rand($vocal_tracks),
                'year' => rand(1950, date("Y")),
                'length' => '0' . rand(1,9) . ':' . rand(10, 59),
                'cost' => array_rand($costs),
                'system' => array_rand($systems),
                'song' => $faker->sentence($NbWords = rand(2,5))
            ]);
        }

    }
}