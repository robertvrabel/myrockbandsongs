<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model {

    /** @var array */
    protected $fillable = [
        'artist_id',
        'album'
    ];

    /**
     * Get the artist associated with the album
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function artist()
    {
        return $this->belongsTo('App\Artist');
    }
}