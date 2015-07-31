<?php namespace App\Repositories;

class RatingRepository extends Repository
{

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
     * @return mixed
     */
    public function getTypes()
    {
        return $this->model->types;
    }

    /**
     * @return mixed
     */
    public function getRatings()
    {
        return $this->model->ratings;
    }
}