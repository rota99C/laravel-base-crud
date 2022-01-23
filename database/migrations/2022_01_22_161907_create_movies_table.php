<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title', 70);
            $table->year('year');
            $table->string('image_thumb', 700);
            $table->string('image_cover', 700);
            $table->string('facebook_page', 700);
            $table->string('twitter_page', 700);
            $table->string('instagram_page', 700);
            $table->string('website_page', 700);
            $table->string('description', 8000);
            $table->string('cast', 700);
            $table->string('genres', 700);
            $table->string('directors', 700);
            $table->string('producers', 700);
            $table->string('writers', 700);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
}
