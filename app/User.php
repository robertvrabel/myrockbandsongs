<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'receive_emails',
        'show_beatles',
        'show_rbnetwork',
        'year_born',
        'user_name',
        'gamer_tag',
        'psnname',
        'wii_friend_code',
        'has_donated',
        'time_zone',
        'where_songs',
        'preferred_instrument'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token'
    ];

    /**
     * Timezone list
     *
     * @var array
     */
    protected $timezones = [
        '' => 'Select a Timezone',
        '-12' => '(GMT -12:00) Eniwetok, Kwajalein',
        '-11' => '(GMT -11:00) Midway Island, Samoa',
        '-10' => '(GMT -10:00) Hawaii',
        '-9' => '(GMT -9:00) Alaska',
        '-8' => '(GMT -8:00) Pacific Time (US &amp; Canada)',
        '-7' => '(GMT -7:00) Mountain Time (US &amp; Canada)',
        '-6' => '(GMT -6:00) Central Time (US &amp; Canada), Mexico City',
        '-5' => '(GMT -5:00) Eastern Time (US &amp; Canada), Bogota, Lima',
        '-4' => '(GMT -4:00) Atlantic Time (Canada), Caracas, La Paz',
        '-3.5' => '(GMT -3:30) Newfoundland',
        '-3' => '(GMT -3:00) Brazil, Buenos Aires, Georgetown',
        '-2' => '(GMT -2:00) Mid-Atlantic',
        '-1' => '(GMT -1:00 hour) Azores, Cape Verde Islands',
        '0' => '(GMT) Western Europe Time, London, Lisbon, Casablanca',
        '1' => '(GMT +1:00 hour) Brussels, Copenhagen, Madrid, Paris',
        '2' => '(GMT +2:00) Kaliningrad, South Africa',
        '3' => '(GMT +3:00) Baghdad, Riyadh, Moscow, St. Petersburg',
        '3.5' => '(GMT +3:30) Tehran',
        '4' => '(GMT +4:00) Abu Dhabi, Muscat, Baku, Tbilisi',
        '4.5' => '(GMT +4:30) Kabul',
        '5' => '(GMT +5:00) Ekaterinburg, Islamabad, Karachi, Tashkent',
        '5.5' => '(GMT +5:30) Bombay, Calcutta, Madras, New Delhi',
        '6' => '(GMT +6:00) Almaty, Dhaka, Colombo',
        '7' => '(GMT +7:00) Bangkok, Hanoi, Jakarta',
        '8' => '(GMT +8:00) Beijing, Perth, Singapore, Hong Kong',
        '9' => '(GMT +9:00) Tokyo, Seoul, Osaka, Sapporo, Yakutsk',
        '9.5' => '(GMT +9:30) Adelaide, Darwin',
        '10' => '(GMT +10:00) Eastern Australia, Guam, Vladivostok',
        '11' => '(GMT +11:00) Magadan, Solomon Islands, New Caledonia',
        '12' => '(GMT +12:00) Auckland, Wellington, Fiji, Kamchatka'
    ];

    /**
     * @return array
     */
    public function getTimezonesAttribute()
    {
        return $this->timezones;
    }

    /**
     * @return string
     */
    public function getNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    /**
     * Get the songs associated to this user
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function songs()
    {
        return $this->belongsToMany('App\Song')->withTimestamps();
    }

    /**
     * Get the wishlist associated to this user
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function wishlist()
    {
        return $this->belongsToMany('App\Song', 'wishlist')->withTimestamps();
    }
}
