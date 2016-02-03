<?php

use Illuminate\Database\Seeder;

class EstadosTableSeeder extends Seeder
{
    /**
     * Alimenta uma schema de estados
     * @author Cesar André (https://github.com/cesar-andre)
     * @return void
     */
    public function run()
    {
        DB::table('estados')->insert(['UF' => 'AC', 'nome' => 'ACRE', 'codigo_uf_ibge' => 12]);
        DB::table('estados')->insert(['UF' => 'AL', 'nome' => 'ALAGOAS', 'codigo_uf_ibge' => 27]);
        DB::table('estados')->insert(['UF' => 'AM', 'nome' => 'AMAZONAS', 'codigo_uf_ibge' => 13]);
        DB::table('estados')->insert(['UF' => 'AP', 'nome' => 'AMAPÁ', 'codigo_uf_ibge' => 16]);
        DB::table('estados')->insert(['UF' => 'BA', 'nome' => 'BAHIA', 'codigo_uf_ibge' => 29]);
        DB::table('estados')->insert(['UF' => 'CE', 'nome' => 'CEARÁ', 'codigo_uf_ibge' => 23]);
        DB::table('estados')->insert(['UF' => 'DF', 'nome' => 'DISTRITO FEDERAL', 'codigo_uf_ibge' => 53]);
        DB::table('estados')->insert(['UF' => 'ES', 'nome' => 'ESPÍRITO SANTO', 'codigo_uf_ibge' => 32]);
        DB::table('estados')->insert(['UF' => 'GO', 'nome' => 'GOIÁS', 'codigo_uf_ibge' => 52]);
        DB::table('estados')->insert(['UF' => 'MA', 'nome' => 'MARANHÃO', 'codigo_uf_ibge' => 21]);
        DB::table('estados')->insert(['UF' => 'MG', 'nome' => 'MINAS GERAIS', 'codigo_uf_ibge' => 31]);
        DB::table('estados')->insert(['UF' => 'MS', 'nome' => 'MATO GROSSO DO SUL', 'codigo_uf_ibge' => 50]);
        DB::table('estados')->insert(['UF' => 'MT', 'nome' => 'MATO GROSSO', 'codigo_uf_ibge' => 51]);
        DB::table('estados')->insert(['UF' => 'PA', 'nome' => 'PARÁ', 'codigo_uf_ibge' => 15]);
        DB::table('estados')->insert(['UF' => 'PB', 'nome' => 'PARAIBA', 'codigo_uf_ibge' => 25]);
        DB::table('estados')->insert(['UF' => 'PE', 'nome' => 'PERNAMBUCO', 'codigo_uf_ibge' => 26]);
        DB::table('estados')->insert(['UF' => 'PI', 'nome' => 'PIAUÍ', 'codigo_uf_ibge' => 22]);
        DB::table('estados')->insert(['UF' => 'PR', 'nome' => 'PARANÁ', 'codigo_uf_ibge' => 41]);
        DB::table('estados')->insert(['UF' => 'RJ', 'nome' => 'RIO DE JANEIRO', 'codigo_uf_ibge' => 33]);
        DB::table('estados')->insert(['UF' => 'RN', 'nome' => 'RIO GRANDE DO NORTE', 'codigo_uf_ibge' => 24]);
        DB::table('estados')->insert(['UF' => 'RO', 'nome' => 'RONDÔNIA', 'codigo_uf_ibge' => 11]);
        DB::table('estados')->insert(['UF' => 'RR', 'nome' => 'RORAIMA', 'codigo_uf_ibge' => 14]);
        DB::table('estados')->insert(['UF' => 'RS', 'nome' => 'RIO GRANDE DO SUL', 'codigo_uf_ibge' => 43]);
        DB::table('estados')->insert(['UF' => 'SC', 'nome' => 'SANTA CATARINA', 'codigo_uf_ibge' => 42]);
        DB::table('estados')->insert(['UF' => 'SE', 'nome' => 'SERGIPE', 'codigo_uf_ibge' => 28]);
        DB::table('estados')->insert(['UF' => 'SP', 'nome' => 'SÃO PAULO', 'codigo_uf_ibge' => 35]);
        DB::table('estados')->insert(['UF' => 'TO', 'nome' => 'TOCANTINS','codigo_uf_ibge' =>  17]);
    }
}
