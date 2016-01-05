<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstadosTable extends Migration
{
    /**
     * Cria o schema de estados do projeto
     * @author Cesar André (https://github.com/cesar-andre)
     * @return void
     */
    public function up()
    {
        Schema::create('estados', function (Blueprint $table) {
            $table->string('UF');
            $table->string('nome');
            $table->integer('codigo_uf_ibge');
            $table->timestamps();
            $table->primary('UF');
        });
    }

    /**
     * Rollback caso necessário
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('estados');
    }
}
