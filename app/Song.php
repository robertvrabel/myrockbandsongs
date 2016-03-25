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

    /** @var array */
    protected $album_tracks = [
        '1' => '1',
        '2' => '2',
        '3' => '3',
        '4' => '4',
        '5' => '5',
        '6' => '6',
        '7' => '7',
        '8' => '8',
        '9' => '9',
        '10' => '10',
        '11' => '11',
        '12' => '12',
        '13' => '13',
        '14' => '14',
        '15' => '15',
        '16' => '16',
        '17' => '17',
        '18' => '18',
        '19' => '19',
        '20' => '20',
        '21' => '21',
        '22' => '22',
        '23' => '23',
        '24' => '24',
        '25' => '25',
        '26' => '26',
        '27' => '27',
        '28' => '28',
        '29' => '29',
        '30' => '30',
        '31' => '31',
        '32' => '32',
        '33' => '33',
        '34' => '34',
        '35' => '35',
        '36' => '36',
        '37' => '37',
        '38' => '38',
        '39' => '39',
        '40' => '40'
    ];

    /** @var array */
    protected $vocal_tracks = [
        '' => 'N/A',
        '1' => '1',
        '2' => '2',
        '3' => '3'
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

    /**
     * @return array
     */
    public function getAlbumTracksAttribute()
    {
        return $this->album_tracks;
    }

    /**
     * @return array
     */
    public function getVocalTracksAttribute()
    {
        return $this->vocal_tracks;
    }
}