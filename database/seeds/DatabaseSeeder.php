<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);

        $this->call('UserTableSeeder');
        $this->call('ArtistTableSeeder');
        $this->call('AlbumTableSeeder');
        $this->call('GenreTableSeeder');
        $this->call('PackTableSeeder');
        $this->call('TypeTableSeeder');
        $this->call('BookletTableSeeder');
        $this->call('DonationTableSeeder');
        $this->call('SongTableSeeder');
        $this->call('SongUserTableSeeder');
        $this->call('RatingTableSeeder');
        $this->call('CommentTableSeeder');

        Model::reguard();
    }
}
