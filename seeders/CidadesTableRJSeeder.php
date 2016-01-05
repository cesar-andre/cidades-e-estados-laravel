<?php

use Illuminate\Database\Seeder;

class CidadesTableRJSeeder extends Seeder
{
    /**
     * Alimenta um schema de cidades com as cidades do Rio de Janeiro
     * @author Cesar André (https://github.com/cesar-andre)
     * @return void
     */
    public function run()
    {
    	DB::table('cidades')->insert(['id' => 3300100, 'estado_id' => 33, 'nome' => 'Angra dos Reis']);
		DB::table('cidades')->insert(['id' => 3300159, 'estado_id' => 33, 'nome' => 'Aperibé']);
		DB::table('cidades')->insert(['id' => 3300209, 'estado_id' => 33, 'nome' => 'Araruama']);
		DB::table('cidades')->insert(['id' => 3300225, 'estado_id' => 33, 'nome' => 'Areal']);
		DB::table('cidades')->insert(['id' => 3300233, 'estado_id' => 33, 'nome' => 'Armação dos Búzios']);
		DB::table('cidades')->insert(['id' => 3300258, 'estado_id' => 33, 'nome' => 'Arraial do Cabo']);
		DB::table('cidades')->insert(['id' => 3300308, 'estado_id' => 33, 'nome' => 'Barra do Piraí']);
		DB::table('cidades')->insert(['id' => 3300407, 'estado_id' => 33, 'nome' => 'Barra Mansa']);
		DB::table('cidades')->insert(['id' => 3300456, 'estado_id' => 33, 'nome' => 'Belford Roxo']);
		DB::table('cidades')->insert(['id' => 3300506, 'estado_id' => 33, 'nome' => 'Bom Jardim']);
		DB::table('cidades')->insert(['id' => 3300605, 'estado_id' => 33, 'nome' => 'Bom Jesus do Itabapoana']);
		DB::table('cidades')->insert(['id' => 3300704, 'estado_id' => 33, 'nome' => 'Cabo Frio']);
		DB::table('cidades')->insert(['id' => 3300803, 'estado_id' => 33, 'nome' => 'Cachoeiras de Macacu']);
		DB::table('cidades')->insert(['id' => 3300902, 'estado_id' => 33, 'nome' => 'Cambuci']);
		DB::table('cidades')->insert(['id' => 3300936, 'estado_id' => 33, 'nome' => 'Carapebus']);
		DB::table('cidades')->insert(['id' => 3300951, 'estado_id' => 33, 'nome' => 'Comendador Levy Gasparian']);
		DB::table('cidades')->insert(['id' => 3301009, 'estado_id' => 33, 'nome' => 'Campos dos Goytacazes']);
		DB::table('cidades')->insert(['id' => 3301108, 'estado_id' => 33, 'nome' => 'Cantagalo']);
		DB::table('cidades')->insert(['id' => 3301157, 'estado_id' => 33, 'nome' => 'Cardoso Moreira']);
		DB::table('cidades')->insert(['id' => 3301207, 'estado_id' => 33, 'nome' => 'Carmo']);
		DB::table('cidades')->insert(['id' => 3301306, 'estado_id' => 33, 'nome' => 'Casimiro de Abreu']);
		DB::table('cidades')->insert(['id' => 3301405, 'estado_id' => 33, 'nome' => 'Conceição de Macabu']);
		DB::table('cidades')->insert(['id' => 3301504, 'estado_id' => 33, 'nome' => 'Cordeiro']);
		DB::table('cidades')->insert(['id' => 3301603, 'estado_id' => 33, 'nome' => 'Duas Barras']);
		DB::table('cidades')->insert(['id' => 3301702, 'estado_id' => 33, 'nome' => 'Duque de Caxias']);
		DB::table('cidades')->insert(['id' => 3301801, 'estado_id' => 33, 'nome' => 'Engenheiro Paulo de Frontin']);
		DB::table('cidades')->insert(['id' => 3301850, 'estado_id' => 33, 'nome' => 'Guapimirim']);
		DB::table('cidades')->insert(['id' => 3301876, 'estado_id' => 33, 'nome' => 'Iguaba Grande']);
		DB::table('cidades')->insert(['id' => 3301900, 'estado_id' => 33, 'nome' => 'Itaboraí']);
		DB::table('cidades')->insert(['id' => 3302007, 'estado_id' => 33, 'nome' => 'Itaguaí']);
		DB::table('cidades')->insert(['id' => 3302056, 'estado_id' => 33, 'nome' => 'Italva']);
		DB::table('cidades')->insert(['id' => 3302106, 'estado_id' => 33, 'nome' => 'Itaocara']);
		DB::table('cidades')->insert(['id' => 3302205, 'estado_id' => 33, 'nome' => 'Itaperuna']);
		DB::table('cidades')->insert(['id' => 3302254, 'estado_id' => 33, 'nome' => 'Itatiaia']);
		DB::table('cidades')->insert(['id' => 3302270, 'estado_id' => 33, 'nome' => 'Japeri']);
		DB::table('cidades')->insert(['id' => 3302304, 'estado_id' => 33, 'nome' => 'Laje do Muriaé']);
		DB::table('cidades')->insert(['id' => 3302403, 'estado_id' => 33, 'nome' => 'Macaé']);
		DB::table('cidades')->insert(['id' => 3302452, 'estado_id' => 33, 'nome' => 'Macuco']);
		DB::table('cidades')->insert(['id' => 3302502, 'estado_id' => 33, 'nome' => 'Magé']);
		DB::table('cidades')->insert(['id' => 3302601, 'estado_id' => 33, 'nome' => 'Mangaratiba']);
		DB::table('cidades')->insert(['id' => 3302700, 'estado_id' => 33, 'nome' => 'Maricá']);
		DB::table('cidades')->insert(['id' => 3302809, 'estado_id' => 33, 'nome' => 'Mendes']);
		DB::table('cidades')->insert(['id' => 3302858, 'estado_id' => 33, 'nome' => 'Mesquita']);
		DB::table('cidades')->insert(['id' => 3302908, 'estado_id' => 33, 'nome' => 'Miguel Pereira']);
		DB::table('cidades')->insert(['id' => 3303005, 'estado_id' => 33, 'nome' => 'Miracema']);
		DB::table('cidades')->insert(['id' => 3303104, 'estado_id' => 33, 'nome' => 'Natividade']);
		DB::table('cidades')->insert(['id' => 3303203, 'estado_id' => 33, 'nome' => 'Nilópolis']);
		DB::table('cidades')->insert(['id' => 3303302, 'estado_id' => 33, 'nome' => 'Niterói']);
		DB::table('cidades')->insert(['id' => 3303401, 'estado_id' => 33, 'nome' => 'Nova Friburgo']);
		DB::table('cidades')->insert(['id' => 3303500, 'estado_id' => 33, 'nome' => 'Nova Iguaçu']);
		DB::table('cidades')->insert(['id' => 3303609, 'estado_id' => 33, 'nome' => 'Paracambi']);
		DB::table('cidades')->insert(['id' => 3303708, 'estado_id' => 33, 'nome' => 'Paraíba do Sul']);
		DB::table('cidades')->insert(['id' => 3303807, 'estado_id' => 33, 'nome' => 'Parati']);
		DB::table('cidades')->insert(['id' => 3303856, 'estado_id' => 33, 'nome' => 'Paty do Alferes']);
		DB::table('cidades')->insert(['id' => 3303906, 'estado_id' => 33, 'nome' => 'Petrópolis']);
		DB::table('cidades')->insert(['id' => 3303955, 'estado_id' => 33, 'nome' => 'Pinheiral']);
		DB::table('cidades')->insert(['id' => 3304003, 'estado_id' => 33, 'nome' => 'Piraí']);
		DB::table('cidades')->insert(['id' => 3304102, 'estado_id' => 33, 'nome' => 'Porciúncula']);
		DB::table('cidades')->insert(['id' => 3304110, 'estado_id' => 33, 'nome' => 'Porto Real']);
		DB::table('cidades')->insert(['id' => 3304128, 'estado_id' => 33, 'nome' => 'Quatis']);
		DB::table('cidades')->insert(['id' => 3304144, 'estado_id' => 33, 'nome' => 'Queimados']);
		DB::table('cidades')->insert(['id' => 3304151, 'estado_id' => 33, 'nome' => 'Quissamã']);
		DB::table('cidades')->insert(['id' => 3304201, 'estado_id' => 33, 'nome' => 'Resende']);
		DB::table('cidades')->insert(['id' => 3304300, 'estado_id' => 33, 'nome' => 'Rio Bonito']);
		DB::table('cidades')->insert(['id' => 3304409, 'estado_id' => 33, 'nome' => 'Rio Claro']);
		DB::table('cidades')->insert(['id' => 3304508, 'estado_id' => 33, 'nome' => 'Rio das Flores']);
		DB::table('cidades')->insert(['id' => 3304524, 'estado_id' => 33, 'nome' => 'Rio das Ostras']);
		DB::table('cidades')->insert(['id' => 3304557, 'estado_id' => 33, 'nome' => 'Rio de Janeiro']);
		DB::table('cidades')->insert(['id' => 3304607, 'estado_id' => 33, 'nome' => 'Santa Maria Madalena']);
		DB::table('cidades')->insert(['id' => 3304706, 'estado_id' => 33, 'nome' => 'Santo Antônio de Pádua']);
		DB::table('cidades')->insert(['id' => 3304755, 'estado_id' => 33, 'nome' => 'São Francisco de Itabapoana']);
		DB::table('cidades')->insert(['id' => 3304805, 'estado_id' => 33, 'nome' => 'São Fidélis']);
		DB::table('cidades')->insert(['id' => 3304904, 'estado_id' => 33, 'nome' => 'São Gonçalo']);
		DB::table('cidades')->insert(['id' => 3305000, 'estado_id' => 33, 'nome' => 'São João da Barra']);
		DB::table('cidades')->insert(['id' => 3305109, 'estado_id' => 33, 'nome' => 'São João de Meriti']);
		DB::table('cidades')->insert(['id' => 3305133, 'estado_id' => 33, 'nome' => 'São José de Ubá']);
		DB::table('cidades')->insert(['id' => 3305158, 'estado_id' => 33, 'nome' => 'São José do Vale do Rio Preto']);
		DB::table('cidades')->insert(['id' => 3305208, 'estado_id' => 33, 'nome' => 'São Pedro da Aldeia']);
		DB::table('cidades')->insert(['id' => 3305307, 'estado_id' => 33, 'nome' => 'São Sebastião do Alto']);
		DB::table('cidades')->insert(['id' => 3305406, 'estado_id' => 33, 'nome' => 'Sapucaia']);
		DB::table('cidades')->insert(['id' => 3305505, 'estado_id' => 33, 'nome' => 'Saquarema']);
		DB::table('cidades')->insert(['id' => 3305554, 'estado_id' => 33, 'nome' => 'Seropédica']);
		DB::table('cidades')->insert(['id' => 3305604, 'estado_id' => 33, 'nome' => 'Silva Jardim']);
		DB::table('cidades')->insert(['id' => 3305703, 'estado_id' => 33, 'nome' => 'Sumidouro']);
		DB::table('cidades')->insert(['id' => 3305752, 'estado_id' => 33, 'nome' => 'Tanguá']);
		DB::table('cidades')->insert(['id' => 3305802, 'estado_id' => 33, 'nome' => 'Teresópolis']);
		DB::table('cidades')->insert(['id' => 3305901, 'estado_id' => 33, 'nome' => 'Trajano de Morais']);
		DB::table('cidades')->insert(['id' => 3306008, 'estado_id' => 33, 'nome' => 'Três Rios']);
		DB::table('cidades')->insert(['id' => 3306107, 'estado_id' => 33, 'nome' => 'Valença']);
		DB::table('cidades')->insert(['id' => 3306156, 'estado_id' => 33, 'nome' => 'Varre-Sai']);
		DB::table('cidades')->insert(['id' => 3306206, 'estado_id' => 33, 'nome' => 'Vassouras']);
		DB::table('cidades')->insert(['id' => 3306305, 'estado_id' => 33, 'nome' => 'Volta Redonda']);
    }
}
