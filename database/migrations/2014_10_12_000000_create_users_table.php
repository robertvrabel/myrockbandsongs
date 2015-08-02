<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->rememberToken();
            $table->timestamps();
            $table->dateTime('last_login');
            $table->tinyInteger('is_admin');
            $table->tinyInteger('receive_emails');
            $table->tinyInteger('show_beatles');
            $table->tinyInteger('show_rbnetwork');
            $table->tinyInteger('year_born');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->string('user_name')->unique();
            $table->string('gamer_tag');
            $table->string('psnname');
            $table->string('wii_friend_code');
            $table->string('has_donated');
            $table->string('time_zone', 6);
            $table->string('where_songs', 32);
            $table->string('preferred_instrument');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
