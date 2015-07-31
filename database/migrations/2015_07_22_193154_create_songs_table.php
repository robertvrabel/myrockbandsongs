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
            $table->foreign('artist_id')->references('id')->on('artists')->onDelete('cascade');
            $table->integer('album_id')->unsigned();
            $table->foreign('album_id')->references('id')->on('albums')->onDelete('cascade');
            $table->integer('genre_id')->unsigned();
            $table->foreign('genre_id')->references('id')->on('genres')->onDelete('cascade');
            $table->integer('pack_id')->unsigned();
            $table->foreign('pack_id')->references('id')->on('packs')->onDelete('cascade');
            $table->integer('type_id')->unsigned();
            $table->foreign('type_id')->references('id')->on('types')->onDelete('cascade');
            $table->integer('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->date('added');
            $table->timestamps();
            $table->tinyInteger('rating');
            $table->string('gender'); // use to be 1 or 0
            $table->string('difficulty', 1); // replaces difficulty_id
            $table->string('guitar', 1);
            $table->string('vocals', 1);
            $table->string('drums', 1);
            $table->string('bass', 1);
            $table->string('keyboard', 1);
            $table->string('pro_guitar', 1);
            $table->string('pro_vocals', 1);
            $table->string('pro_drums', 1);
            $table->string('pro_bass', 1);
            $table->string('pro_keyboard', 1);
            $table->string('album_track', 1);
            $table->string('vocal_tracks', 1);
            $table->smallInteger('year');
            $table->string('length');
            $table->string('cost');
            $table->string('system');
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
