<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('categories_id');
            $table->foreign('categories_id')->references('id')->on('movies_categories')->onDelete('cascade');
            $table->foreignId('languages_id');
            $table->foreign('languages_id')->references('id')->on('languages')->onDelete('cascade');
            $table->string('movie_name');
            $table->string('movie_image');
            $table->longText('movie_description');
            $table->integer('movie_rating')->nullable();
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
        Schema::dropIfExists('movies_details');
    }
}
