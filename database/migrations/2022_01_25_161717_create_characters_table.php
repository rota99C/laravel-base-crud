<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharactersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characters', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name', 70);
            $table->string('description', 8000);
            $table->string('image_thumb', 700);
            $table->string('image_cover', 700);
            $table->string('powers', 500);
            $table->string('first_appearance', 100);
            $table->string('alter_ego', 70);
            $table->string('occupation', 70);
            $table->string('facebook_page', 700);
            $table->string('twitter_page', 700);
            $table->string('instagram_page', 700);
            $table->string('video_page', 700);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('characters');
    }
}
