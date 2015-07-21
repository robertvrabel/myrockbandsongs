<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model {

    /** @var array */
    protected $fillable = [
        'display_order',
        'is_active',
        'is_disc',
        'type',
        'type_long',
        'define_name'
    ];
}