<?php namespace App\Repositories;

class BookletRepository extends Repository
{

    /**
     * The Model
     *
     * @return string
     */
    public function model()
    {
        return 'App\Booklet';
    }

    /**
     * @return mixed
     */
    public function getOrderby()
    {
        return $this->model->orderby;
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
    public function getInstruments()
    {
        return $this->model->instruments;
    }

    /**
     * @return mixed
     */
    public function getRegularInstruments()
    {
        return $this->model->regular_instruments;
    }

    /**
     * @return mixed
     */
    public function getColumns()
    {
        return $this->model->columns;
    }

    /**
     * @return mixed
     */
    public function getSystems()
    {
        return $this->model->systems;
    }
}