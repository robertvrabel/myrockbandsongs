<?php

use App\Repositories\ArtistRepository;
use Illuminate\Container\Container;
use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class ArtistTableSeeder extends Seeder {

    public function run()
    {
        DB::table('artists')->truncate();

        // Initialize ArtistRepository
        $artists = new ArtistRepository(new Container);

        $artists->create([
            'artist' => 'The First Artist',
            'artist_orderby' => 'First Artist, The',
            'vocal_gender' => 1
        ]);
    }

}