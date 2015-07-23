<?php

use App\Repositories\ArtistRepository;
use Illuminate\Container\Container;
use Illuminate\Database\Seeder;

class ArtistTableSeeder extends Seeder {

    public function run()
    {
        DB::table('artists')->truncate();

        // Initialize Repository
        $artists = new ArtistRepository(new Container);

        // Get the genders
        $genders = $artists->getGenders();

        // Create a new faker object
        $faker = Faker\Factory::create();

        // How many times we want to run it
        $run = 25;

        // Fake it!
        for($i=0; $i < $run; $i++) {
            $artists->create([
                'artist' => $faker->name,
                'artist_orderby' => $faker->name,
                'vocalgender' => $genders[array_rand($genders)]
            ]);
        }
    }
}