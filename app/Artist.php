<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model {

    /** @var array */
    protected $fillable = [
        'vocal_gender',
        'artist',
        'artist_orderby'
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
}