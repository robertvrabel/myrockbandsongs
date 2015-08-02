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
     * @param array $songs
     */
    public function syncSongs(array $songs)
    {
        $this->model->songs()->sync($songs);
    }

    /**
     * Sync the wishlist to the user
     *
     * @param array $songs
     */
    public function syncWishlist(array $songs)
    {
        $this->model->wishlist()->sync($songs);
    }

    /**
     * Get the timezones
     *
     * @return mixed
     */
    public function getTimezones()
    {
        return $this->model->timezones;
    }

    /**
     * If they are an admin or not
     *
     * @return bool
     */
    public function isAdmin()
    {
        return $this->model->is_admin == 1 ? true : false;
    }
}