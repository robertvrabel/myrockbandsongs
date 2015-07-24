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

    public function getDifficultiesList()
    {
        return $this->model->difficulties;
    }

    public function getRatingsList()
    {
        return $this->model->ratings;
    }

    public function getGendersList()
    {
        return $this->model->genders;
    }

    public function getCostsList()
    {
        return $this->model->costs;
    }

    public function getSystemsList()
    {
        return $this->model->systems;
    }
}