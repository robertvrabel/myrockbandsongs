<?php namespace App\Repositories;

class UserRepository extends Repository {

    /**
     * The Model
     *
     * @return string
     */
    public function model()
    {
        return 'App\User';
    }

    /**
     * Sync the songs to the user
     *
     * @param array $topics
     */
    public function syncSongs(array $songs)
    {
        $this->model->songs()->sync($songs);
    }
}