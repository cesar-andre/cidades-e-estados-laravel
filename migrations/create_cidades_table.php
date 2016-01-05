<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCidadesTable extends Migration
{
    /**
     * Cria o schema de cidades do projeto
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
            $table->foreign('estado_id')->references('id')->on('estados');
        });
    }

    /**
     * Rollback caso necessário
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cidades');
    }
}
