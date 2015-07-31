<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Booklet extends Model
{

    /** @var array */
    protected $fillable = [
        'save',
        'group_by',
        'first_page',
        'newest_songs_count',
        'order',
        'order2',
        'order3',
        'font_size',
        'columns',
        'instruments',
        'types',
        'booklet'
    ];

    /** @var array */
    protected $orderby = [
        'song' => 'Song',
        'artist' => 'Artist',
        'gender' => 'Vocal Gender',
        'vocal_tracks' => 'Vocal Tracks',
        'album' => 'Album',
        'album_track' => 'Album Track',
        'length' => 'Song Length',
        'year' => 'Year',
        'genre' => 'Genre',
        'pack' => 'Pack',
        'type' => 'Type',
        'song_rating' => 'Song Rating',
        'band' => 'Difficulty - Band',
        'guitar' => 'Difficulty - Guitar',
        'bass' => 'Difficulty - Bass',
        'drums' => 'Difficulty - Drums',
        'vocals' => 'Difficulty - Vocals',
        'keyboard' => 'Difficulty - Keyboard',
        'pro_guitar' => 'Difficulty - Pro Guitar',
        'pro_bass' => 'Difficulty - Pro Bass',
        'pro_drums' => 'Difficulty - Pro Drums',
        'pro_vocals' => 'Difficulty - Pro Vocals',
        'pro_keyboard' => 'Difficulty - Pro Keyboard',
        'created_at' => 'Date Purchased', // old field was date_entered
        'added' => 'Release Date'
    ];

    /** @var array */
    protected $types = [
        'all' => 'All Owned Songs',
        'rb1' => 'Rock Band 1',
        'rb2' => 'Rock Band 2',
        'rb3' => 'Rock Band 3',
        'dlc' => 'DLC',
        'beatles' => 'Beatles',
        'lego' => 'Lego + Family Friendly',
        'not_purchased' => 'Not Purchased DLC',
        'not_purchased_all' => 'Not Purchased (All Songs)',
        'wishlist' => 'Wishlist',
        'rated' => 'Rated Songs'
    ];

    /** @var array */
    protected $columns = [
        'song' => 'Song',
        'artist' => 'Artist',
        'Vocal Gender' => 'Vocal Gender',
        'Vocal Tracks' => 'Vocal Tracks',
        'album' => 'Album',
        'Album Track' => 'Album Track',
        'Song Length' => 'Song Length',
        'genre' => 'Genre',
        'year' => 'Year',
        'pack' => 'Pack',
        'type' => 'Type',
        'rating' => 'Rating',
        'band' => 'Band Difficulty',
        'guitar' => 'Guitar',
        'bass' => 'Bass',
        'drums' => 'Drums',
        'vocals' => 'Vocals',
        'keyboard' => 'Keyboard',
        'pro guitar' => 'Pro Guitar',
        'pro bass' => 'Pro Bass',
        'pro drums' => 'Pro Drums',
        'pro vocals' => 'Pro Vocals',
        'pro keyboard' => 'Pro Keyboard',
        'song rating' => 'Song Rating',
        'created at' => 'Date Purchased', // old field was date entered
        'added' => 'Release Date'
    ];

    /** @var array */
    protected $fonts = [
        '200' => '200%',
        '190' => '190%',
        '180' => '180%',
        '170' => '170%',
        '160' => '160%',
        '150' => '150%',
        '140' => '140%',
        '130' => '130%',
        '120' => '120%',
        '110' => '110%',
        '100' => '100%',
        '90' => '90%',
        '80' => '80%',
        '70' => '70%',
        '60' => '60%',
        '50' => '50%'
    ];

    /** @var array */
    protected $instruments = [
        'guitar' => 'Guitar',
        'bass' => 'Bass',
        'drums' => 'Drums',
        'vocals' => 'Vocals',
        'keyboard' => 'Keyboard',
        'pro_guitar' => 'Pro Guitar',
        'pro_bass' => 'Pro Bass',
        'pro_drums' => 'Pro Drums',
        'pro_vocals' => 'Pro Vocals',
        'pro_keyboard' => 'Pro Keyboard'
    ];

    /** @var array */
    protected $regular_instruments = [
        'guitar' => 'Guitar',
        'bass' => 'Bass',
        'drums' => 'Drums',
        'vocals' => 'Vocals',
        'keyboard' => 'Keyboard'
    ];

    /** @var array */
    protected $systems = [
        'PS2' => 'Playstation 2',
        'PS3' => 'Playstation 3',
        'PS4' => 'Playstation 4',
        'XBOX360' => 'XBOX360',
        'WII' => 'Nintendo Wii'
    ];

    /**
     * @return array
     */
    public function getOrderbyAttribute()
    {
        return $this->orderby;
    }

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
    public function getColumnsAttribute()
    {
        return $this->columns;
    }

    /**
     * @return array
     */
    public function getFontsAttribute()
    {
        return $this->fonts;
    }

    /**
     * @return array
     */
    public function getInstrumentsAttribute()
    {
        return $this->instruments;
    }

    /**
     * @return array
     */
    public function getRegularInstrumentsAttribute()
    {
        return $this->regular_instruments;
    }

    /**
     * @return array
     */
    public function getSystemsAttribute()
    {
        return $this->systems;
    }
}