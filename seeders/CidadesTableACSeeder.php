<?php

use Illuminate\Database\Seeder;

class CidadesTableACSeeder extends Seeder
{
    /**
     * Alimenta um schema de cidades com as cidades do Acre
     * @author Cesar André (https://github.com/cesar-andre)
     * @return void
     */
    public function run()
    {
        DB::table('cidades')->insert(['id' => 1200013, 'estado_id' => 12, 'nome' => 'Acrelândia']);
        DB::table('cidades')->insert(['id' => 1200054, 'estado_id' => 12, 'nome' => 'Assis Brasil']);
        DB::table('cidades')->insert(['id' => 1200104, 'estado_id' => 12, 'nome' => 'Brasiléia']);
        DB::table('cidades')->insert(['id' => 1200138, 'estado_id' => 12, 'nome' => 'Bujari']);
        DB::table('cidades')->insert(['id' => 1200179, 'estado_id' => 12, 'nome' => 'Capixaba']);
        DB::table('cidades')->insert(['id' => 1200203, 'estado_id' => 12, 'nome' => 'Cruzeiro do Sul']);
        DB::table('cidades')->insert(['id' => 1200252, 'estado_id' => 12, 'nome' => 'Epitaciolândia']);
        DB::table('cidades')->insert(['id' => 1200302, 'estado_id' => 12, 'nome' => 'Feijó']);
        DB::table('cidades')->insert(['id' => 1200328, 'estado_id' => 12, 'nome' => 'Jordão']);
        DB::table('cidades')->insert(['id' => 1200336, 'estado_id' => 12, 'nome' => 'Mâncio Lima']);
        DB::table('cidades')->insert(['id' => 1200344, 'estado_id' => 12, 'nome' => 'Manoel Urbano']);
        DB::table('cidades')->insert(['id' => 1200351, 'estado_id' => 12, 'nome' => 'Marechal Thaumaturgo']);
        DB::table('cidades')->insert(['id' => 1200385, 'estado_id' => 12, 'nome' => 'Plácido de Castro']);
        DB::table('cidades')->insert(['id' => 1200393, 'estado_id' => 12, 'nome' => 'Porto Walter']);
        DB::table('cidades')->insert(['id' => 1200401, 'estado_id' => 12, 'nome' => 'Rio Branco']);
        DB::table('cidades')->insert(['id' => 1200427, 'estado_id' => 12, 'nome' => 'Rodrigues Alves']);
        DB::table('cidades')->insert(['id' => 1200435, 'estado_id' => 12, 'nome' => 'Santa Rosa do Purus']);
        DB::table('cidades')->insert(['id' => 1200450, 'estado_id' => 12, 'nome' => 'Senador Guiomard']);
        DB::table('cidades')->insert(['id' => 1200500, 'estado_id' => 12, 'nome' => 'Sena Madureira']);
        DB::table('cidades')->insert(['id' => 1200609, 'estado_id' => 12, 'nome' => 'Tarauacá']);
        DB::table('cidades')->insert(['id' => 1200708, 'estado_id' => 12, 'nome' => 'Xapuri']);
        DB::table('cidades')->insert(['id' => 1200807, 'estado_id' => 12, 'nome' => 'Porto Acre']);
    }
}
