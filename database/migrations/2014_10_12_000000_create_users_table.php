<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->date('data_nasc')->nullable();
            $table->string('bio')->nullable();
            $table->string('genero')->nullable();            
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('genero', function(Blueprint $table) {
            $table->increments('id_genero');
            $table->string('descricao',255);     
        });

        Schema::create('pais', function(Blueprint $table) {
            $table->increments('id_pais');            
            $table->string('nome_pais',100);
            $table->string('sigla',3);
        });

        Schema::create('classificacao_indicativa', function(Blueprint $table) {
            $table->increments('id_classificacao_indicativa');
            $table->string('faixa',2);
        });

        Schema::create('titulo', function(Blueprint $table) {
            $table->increments('id_titulo');
            $table->string('nome_titulo', 255);
            $table->date('data_lancamento')->nullable();
            $table->string('nome_original',255)->nullable();
            $table->integer('duracao')->nullable();
            $table->text('sinopse')->nullable();
            $table->integer('id_pais')->nullable();
            $table->integer('id_classificacao_indicativa')->nullable();
            $table->foreign('id_pais')->references('id_pais')->on('pais');
            $table->foreign('id_classificacao_indicativa')->references('id_classificacao_indicativa')->on('classificacao_indicativa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
        Schema::drop('genero');
        Schema::drop('pais');
        Schema::drop('classificacao_indicativa');
        Schema::drop('titulo');
    }
}
