<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model {

    /** @var array */
    protected $fillable = [
        'song_id',
        'user_id',
        'comment'
    ];
}