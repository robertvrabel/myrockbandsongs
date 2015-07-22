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
    public function getOrder()
    {
        return $this->model->order_list;
    }

    /**
     * @return mixed
     */
    public function getTypes()
    {
        return $this->model->types_list;
    }

    /**
     * @return mixed
     */
    public function getInstruments()
    {
        return $this->model->instruments_list;
    }

    /**
     * @return mixed
     */
    public function getColumns()
    {
        return $this->model->columns_list;
    }
}