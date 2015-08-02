<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Validator::extend('user_name', function($attribute, $value, $parameters) {
            // Usernames we won't allow
            $badnames = array('auth', 'password', 'user', 'song', 'songs', 'donate', 'community', 'feedback', 'admin', 'css', 'js', 'artists', 'albums', 'genres', 'types', 'type', 'album', 'genre', 'artist');

            // If they picked a bad username
            if(in_array($value, $badnames)) {
                return false;
            }

            // Characters we won't allow (legacy business logic)
            $badchars = array(' ','!','@','#','$','%','^','&','*','(',')','+','=','~','`',"'",'"',';','[',']','{','}', ',', '.', '<', '>', '?', '/');

            // Replace the bad characters
            $user_name = str_replace($badchars, '-', $value);

            return $value == $user_name;
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
