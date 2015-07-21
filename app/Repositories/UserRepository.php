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
}