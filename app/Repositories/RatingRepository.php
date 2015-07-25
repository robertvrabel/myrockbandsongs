<?php namespace App\Repositories;

class RatingRepository extends Repository {

    /**
     * The Model
     *
     * @return string
     */
    public function model()
    {
        return 'App\Rating';
    }

    /**
     * Get the types list
     *
     * @return mixed
     */
    public function getTypesList()
    {
        return $this->model->type_list;
    }

    /**
     * Get the ratings list
     *
     * @return mixed
     */
    public function getRatingsList()
    {
        return $this->model->rating_list;
    }
}