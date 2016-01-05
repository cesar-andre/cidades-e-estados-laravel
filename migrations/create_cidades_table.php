<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCidadesTable extends Migration
{
    /**
     * Criação de schema para cidades
     * @author Cesar André (https://github.com/cesar-andre)
     * @return void
     */
    public function up()
    {
        Schema::create('cidades', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('estado_id');
            $table->string('nome');
            $table->timestamps();
        });
    }

    /**
     * Reverte a migration
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cidades');
    }
}
