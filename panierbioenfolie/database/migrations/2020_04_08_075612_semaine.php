<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->date('lundi');
            $table->integer('recette_id1');
            $table->integer('recette_id2');
            $table->integer('recette_id3');
            $table->integer('recette_id4');
            $table->integer('recette_id5');
            $table->integer('recette_id6');
            $table->integer('recette_id7');
            $table->integer('recette_id8');
            $table->integer('recette_id9');
            $table->integer('recette_id10');
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
