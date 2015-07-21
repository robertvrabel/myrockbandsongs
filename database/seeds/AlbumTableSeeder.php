<?php

use App\Repositories\AlbumRepository;
use Illuminate\Container\Container;
use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class AlbumTableSeeder extends Seeder {

    public function run()
    {
        DB::table('albums')->truncate();

        // Initialize AlbumRepository
        $albums = new AlbumRepository(new Container);

        $albums->create([
            'album' => 'The First Album',
            'artist_id' => 1
        ]);
    }

}