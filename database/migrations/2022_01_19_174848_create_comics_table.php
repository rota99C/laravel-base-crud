<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title', 70);
            $table->string('description', 2000);
            $table->decimal('price', 4, 2);
            $table->string('series', 70);
            $table->date('sale_date');
            $table->string('type', 70);
            /* $table->string('artists', 1000);
            $table->string('writers', 1000); */
            $table->string('thumb', 700);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comics');
    }
}
