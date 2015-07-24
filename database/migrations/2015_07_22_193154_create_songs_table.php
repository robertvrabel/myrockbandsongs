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
