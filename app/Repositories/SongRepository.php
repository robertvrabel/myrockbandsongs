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

    public function getDifficulties()
    {
        return $this->model->difficulties;
    }

    public function getRatings()
    {
        return $this->model->ratings;
    }

    public function getGenders()
    {
        return $this->model->genders;
    }

    public function getCosts()
    {
        return $this->model->costs;
    }

    public function getSystems()
    {
        return $this->model->systems;
    }

}