<?php namespace App\Repositories;

class DonationRepository extends Repository {

    /**
     * The Model
     *
     * @return string
     */
    public function model()
    {
        return 'App\Donation';
    }
}