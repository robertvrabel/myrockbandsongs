<?php namespace App\Repositories;

class ArtistRepository extends Repository {

    /**
     * The Model
     *
     * @return string
     */
    public function model()
    {
        return 'App\Artist';
    }

    /**
     * Get the vocal gender options
     *
     * @return mixed
     */
    public function getGenders()
    {
        return $this->model->genders;
    }
}