<?php

use Illuminate\Database\Seeder;

class CidadesTableAPSeeder extends Seeder
{
    /**
     * Alimenta um schema de cidades com as cidades do Amapá
     * @author Cesar André (https://github.com/cesar-andre)
     * @return void
     */
    public function run()
    {
        DB::table('cidades')->insert(['id' => 1600055, 'estado_id' => 16, 'nome' => 'Serra do Navio']);
		DB::table('cidades')->insert(['id' => 1600105, 'estado_id' => 16, 'nome' => 'Amapá']);
		DB::table('cidades')->insert(['id' => 1600154, 'estado_id' => 16, 'nome' => 'Pedra Branca do Amapari']);
		DB::table('cidades')->insert(['id' => 1600204, 'estado_id' => 16, 'nome' => 'Calçoene']);
		DB::table('cidades')->insert(['id' => 1600212, 'estado_id' => 16, 'nome' => 'Cutias']);
		DB::table('cidades')->insert(['id' => 1600238, 'estado_id' => 16, 'nome' => 'Ferreira Gomes']);
		DB::table('cidades')->insert(['id' => 1600253, 'estado_id' => 16, 'nome' => 'Itaubal']);
		DB::table('cidades')->insert(['id' => 1600279, 'estado_id' => 16, 'nome' => 'Laranjal do Jari']);
		DB::table('cidades')->insert(['id' => 1600303, 'estado_id' => 16, 'nome' => 'Macapá']);
		DB::table('cidades')->insert(['id' => 1600402, 'estado_id' => 16, 'nome' => 'Mazagão']);
		DB::table('cidades')->insert(['id' => 1600501, 'estado_id' => 16, 'nome' => 'Oiapoque']);
		DB::table('cidades')->insert(['id' => 1600535, 'estado_id' => 16, 'nome' => 'Porto Grande']);
		DB::table('cidades')->insert(['id' => 1600550, 'estado_id' => 16, 'nome' => 'Pracuúba']);
		DB::table('cidades')->insert(['id' => 1600600, 'estado_id' => 16, 'nome' => 'Santana']);
		DB::table('cidades')->insert(['id' => 1600709, 'estado_id' => 16, 'nome' => 'Tartarugalzinho']);
		DB::table('cidades')->insert(['id' => 1600808, 'estado_id' => 16, 'nome' => 'Vitória do Jari']);
    }
}
