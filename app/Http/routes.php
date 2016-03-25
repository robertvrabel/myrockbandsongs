<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


// Main Homepage
Route::get('/', function () {
    return view('pages.index');
});

// User Settings
Route::get('user/settings', 'Auth\SettingsController@index');
Route::patch('user/settings', 'Auth\SettingsController@update');

// Authentication
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Reset password
Route::controllers([
    'password' => 'Auth\PasswordController',
]);

// Admin area
Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    // Users
    Route::get('users', ['uses' => 'Admin\UsersController@index', 'as' => 'admin.users.index']);

    // Songs
    Route::resource('songs', 'Admin\SongsController');
});
