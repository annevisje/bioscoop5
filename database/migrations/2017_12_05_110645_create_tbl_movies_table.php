<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_movies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('movie_id');
            $table->string('movie_title');
            // $table->string('language_version');
            // $table->string('genre');
            // $table->string('projection');
            $table->string('movie_info')->nullable();
            // $table->string('requirements');
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
        Schema::dropIfExists('tbl_movies');
    }
}
