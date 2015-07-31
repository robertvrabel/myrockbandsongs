<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model {

    /** @var array */
    protected $fillable = [
        'artist_id',
        'album_id',
        'genre_id',
        'pack_id',
        'type_id',
        'user_id',
        'added',
        'difficulty',
        'rating',
        'gender',
        'guitar',
        'vocals',
        'drums',
        'bass',
        'keyboard',
        'pro_guitar',
        'pro_vocals',
        'pro_drums',
        'pro_bass',
        'pro_keyboard',
        'album_track',
        'vocal_tracks',
        'year',
        'length',
        'cost',
        'system',
        'pro_mode',
        'song'
    ];

    /** @var array  */
    protected $difficulties = [
        '' => 'N/A',
        '0' => '0',
        '1' => '1',
        '2' => '2',
        '3' => '3',
        '4' => '4',
        '5' => '5',
        '6' => '6'
    ];

    /** @var array */
    protected $ratings = [
        '0' => 'N/A',
        '1' => 'Supervision Recommended',
        '2' => 'Family Friendly'
    ];

    /** @var array */
    protected $genders = [
        'Male' => 'Male',
        'Female' => 'Female',
        'Male & Female' => 'Male & Female'
    ];

    /** @var array */
    protected $costs = [
        '' => 'N/A',
        '0.99' => '0.99 (80 MP)',
        '1.99' => '1.99 (160 MP)',
        '2.99' => '2.99 (240 MP)',
        '0.00' => 'Free'
    ];

    /** @var array */
    protected $systems = [
        '' => 'N/A',
        'ALL' => 'ALL',
        'XBOX360' => 'XBOX360',
        'PS3-XBOX360' => 'PS3 & XBOX360'
    ];

    /**
     * @return array
     */
    public function getDifficultiesAttribute()
    {
        return $this->difficulties;
    }

    /**
     * @return array
     */
    public function getRatingsAttribute()
    {
        return $this->ratings;
    }

    /**
     * @return array
     */
    public function getGendersAttribute()
    {
        return $this->genders;
    }

    /**
     * @return array
     */
    public function getCostsAttribute()
    {
        return $this->costs;
    }

    /**
     * @return array
     */
    public function getSystemsAttribute()
    {
        return $this->systems;
    }
}