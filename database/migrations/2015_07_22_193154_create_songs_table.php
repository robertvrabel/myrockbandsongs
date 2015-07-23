<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('songs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('artist_id')->unsigned();
            $table->integer('album_id')->unsigned();
            $table->integer('genre_id')->unsigned();
            $table->integer('pack_id')->unsigned();
            $table->integer('type_id')->unsigned();
            $table->integer('user_id')->unsigned()->index(); // replaces submitted_id
            $table->date('added');
            $table->timestamps();
            $table->integer('difficulty')->unsigned(); // replaces difficulty_id
            $table->tinyInteger('rating');
            $table->string('gender'); // use to be 1 or 0
            $table->tinyInteger('guitar');
            $table->tinyInteger('vocals');
            $table->tinyInteger('drums');
            $table->tinyInteger('bass');
            $table->tinyInteger('keyboard');
            $table->tinyInteger('pro_guitar');
            $table->tinyInteger('pro_vocals');
            $table->tinyInteger('pro_drums');
            $table->tinyInteger('pro_bass');
            $table->tinyInteger('pro_keyboard');
            $table->tinyInteger('album_track');
            $table->tinyInteger('vocal_tracks');
            $table->smallInteger('year');
            $table->string('length');
            $table->string('cost');
            $table->string('system');
            $table->string('pro_mode');
            $table->string('song');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('songs');
    }
}
