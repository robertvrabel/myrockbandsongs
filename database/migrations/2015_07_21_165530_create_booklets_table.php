<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookletsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booklets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->tinyInteger('save');
            $table->tinyInteger('group_by');
            $table->tinyInteger('first_page');
            $table->integer('newest_songs_count');
            $table->string('order');
            $table->string('order2');
            $table->string('order3');
            $table->integer('font_size');
            $table->text('columns');
            $table->text('instruments');
            $table->string('types');
            $table->string('booklet');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('booklets');
    }
}
