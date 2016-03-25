<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model {

    /** @var array */
    protected $fillable = [
        'user_id',
        'donation_date',
        'donation',
        'note'
    ];

}