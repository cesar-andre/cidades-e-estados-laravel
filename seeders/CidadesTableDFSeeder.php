<?php

use Illuminate\Database\Seeder;

class CidadesTableDFSeeder extends Seeder
{
    /**
     * Alimenta um schema de cidades com as cidades do Distrito Federal
     * @author Cesar André (https://github.com/cesar-andre)
     * @return void
     */
    public function run()
    {
     	DB::table('cidades')->insert(['id' => 5300108, 'estado_id' => 53, 'nome' => 'Brasília']);
    }
}
