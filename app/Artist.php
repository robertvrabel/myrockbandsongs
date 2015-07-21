<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model {

    /** @var array */
    protected $fillable = [
        'vocal_gender',
        'artist',
        'artist_orderby'
    ];

    public $gender_list = [
        'Male' => 'Male',
        'Female' => 'Male'
    ];

    /**
     * Get the albums associated to this artist
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function albums()
    {
        return $this->belongsToMany('App\Album')->withTimestamps();
    }

        /**
         * Get a list of tiers
         *
         * @return array
         */
    public function getVocalGenderListAttribute()
    {
        return $this->gender_list;
    }
}