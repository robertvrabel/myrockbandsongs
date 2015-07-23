<?php namespace App\Repositories;

class SongRepository extends Repository {

    /**
     * The Model
     *
     * @return string
     */
    public function model()
    {
        return 'App\Song';
    }
}