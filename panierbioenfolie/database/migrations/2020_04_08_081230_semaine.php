<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Semaine extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('semaine', function (Blueprint $table) {
            $table->id();
            $table->date('lundi');
            $table->unsignedBigInteger('recette_id1');
            $table->foreign('recette_id1')->references('id')->on('recette');
            $table->unsignedBigInteger('recette_id2');
            $table->foreign('recette_id2')->references('id')->on('recette');
            $table->unsignedBigInteger('recette_id3');
            $table->foreign('recette_id3')->references('id')->on('recette');
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
        Schema::dropIfExists('semaine');
    }
}
