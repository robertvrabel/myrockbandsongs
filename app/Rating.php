<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model {

    /** @var array */
    protected $fillable = [
        'song_id',
        'user_id',
        'rating_type',
        'rating'
    ];

    /** @var array */
    public $type_list = [
        '0' => 'Overall',
        '1' => 'Guitar',
        '2' => 'Drums',
        '3' => 'Bass',
        '4' => 'Vocals',
        '5' => 'Keys'
    ];

    /** @var array */
    public $rating_list = [
        '1' => '1',
        '2' => '2',
        '3' => '3',
        '4' => '4',
        '5' => '5'
    ];
}