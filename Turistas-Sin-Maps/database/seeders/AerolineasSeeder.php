<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AerolineasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $aerolineas = [
            ['nombre' => 'Aeroméxico', 'descripcion' => 'La aerolínea bandera de México, con vuelos nacionales e internacionales.'],
            ['nombre' => 'Volaris', 'descripcion' => 'Aerolínea de bajo costo que ofrece vuelos nacionales y a algunos destinos internacionales.'],
            ['nombre' => 'Interjet', 'descripcion' => 'Aerolínea mexicana con enfoque en vuelos nacionales e internacionales de bajo costo.'],
            ['nombre' => 'American Airlines', 'descripcion' => 'Una de las aerolíneas más grandes de Estados Unidos, con una extensa red de vuelos globales.'],
            ['nombre' => 'Delta Airlines', 'descripcion' => 'Aerolínea estadounidense con una red de vuelos internacionales, conocida por su excelente servicio.'],
        ];

        DB::table('aerolineas')->insert($aerolineas);
    }
}
