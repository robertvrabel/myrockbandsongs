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

        //disable foreign key check
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

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
        $this->call('WishlistTableSeeder');
        $this->call('RatingTableSeeder');
        $this->call('CommentTableSeeder');

        // re-enable Foreign Key Checks
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        Model::reguard();
    }
}
