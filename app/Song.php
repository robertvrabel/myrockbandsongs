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
}