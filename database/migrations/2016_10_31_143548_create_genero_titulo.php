<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeneroTitulo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genero_titulo', function(Blueprint $table) {
            $table->increments('id_genero_titulo');
            $table->integer('id_genero');
            $table->integer('id_titulo');
            $table->foreign('id_genero')->references('id_genero')->on('genero');
            $table->foreign('id_titulo')->references('id_titulo')->on('titulo');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('genero_titulo');
    }
}
