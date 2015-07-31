<?php

use App\Repositories\GenreRepository;
use Illuminate\Container\Container;
use Illuminate\Database\Seeder;

class GenreTableSeeder extends Seeder {

    public function run()
    {
        DB::table('genres')->truncate();

        // Initialize Repository
        $genres = new GenreRepository(new Container);

        // Create a new faker object
        $faker = Faker\Factory::create();

        // How many times we want to run it
        $run = 15;

        // Fake it!
        for($i=0; $i < $run; $i++) {
            $genres->create([
                'genre' => $faker->word
            ]);
        }
    }
}