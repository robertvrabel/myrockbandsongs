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
    protected $types = [
        '0' => 'Overall',
        '1' => 'Guitar',
        '2' => 'Drums',
        '3' => 'Bass',
        '4' => 'Vocals',
        '5' => 'Keys'
    ];

    /** @var array */
    protected $ratings = [
        '1' => '1',
        '2' => '2',
        '3' => '3',
        '4' => '4',
        '5' => '5'
    ];

    /**
     * @return array
     */
    public function getTypesAttribute()
    {
        return $this->types;
    }

    /**
     * @return array
     */
    public function getRatingsAttribute()
    {
        return $this->ratings;
    }
}