<?php namespace App\Repositories;

class CommentRepository extends Repository {

    /**
     * The Model
     *
     * @return string
     */
    public function model()
    {
        return 'App\Comment';
    }
}