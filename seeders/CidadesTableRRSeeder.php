<?php

use Illuminate\Database\Seeder;

class CidadesTableRRSeeder extends Seeder
{
    /**
     * Alimenta um schema de cidades com as cidades de Roraima
     * @author Cesar André (https://github.com/cesar-andre)
     * @return void
     */
    public function run()
    {
        DB::table('cidades')->insert(['id' => 1400027, 'estado_id' => 14, 'nome' => 'Amajari']);
        DB::table('cidades')->insert(['id' => 1400050, 'estado_id' => 14, 'nome' => 'Alto Alegre']);
        DB::table('cidades')->insert(['id' => 1400100, 'estado_id' => 14, 'nome' => 'Boa Vista']);
        DB::table('cidades')->insert(['id' => 1400159, 'estado_id' => 14, 'nome' => 'Bonfim']);
        DB::table('cidades')->insert(['id' => 1400175, 'estado_id' => 14, 'nome' => 'Cantá']);
        DB::table('cidades')->insert(['id' => 1400209, 'estado_id' => 14, 'nome' => 'Caracaraí']);
        DB::table('cidades')->insert(['id' => 1400233, 'estado_id' => 14, 'nome' => 'Caroebe']);
        DB::table('cidades')->insert(['id' => 1400282, 'estado_id' => 14, 'nome' => 'Iracema']);
        DB::table('cidades')->insert(['id' => 1400308, 'estado_id' => 14, 'nome' => 'Mucajaí']);
        DB::table('cidades')->insert(['id' => 1400407, 'estado_id' => 14, 'nome' => 'Normandia']);
        DB::table('cidades')->insert(['id' => 1400456, 'estado_id' => 14, 'nome' => 'Pacaraima']);
        DB::table('cidades')->insert(['id' => 1400472, 'estado_id' => 14, 'nome' => 'Rorainópolis']);
        DB::table('cidades')->insert(['id' => 1400506, 'estado_id' => 14, 'nome' => 'São João da Baliza']);
        DB::table('cidades')->insert(['id' => 1400605, 'estado_id' => 14, 'nome' => 'São Luiz']);
        DB::table('cidades')->insert(['id' => 1400704, 'estado_id' => 14, 'nome' => 'Uiramutã']);
    }
}
