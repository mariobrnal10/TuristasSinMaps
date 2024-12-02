<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClasesVuelosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $clases = [
            ['nombre_clase' => 'Económica'],
            ['nombre_clase' => 'Ejecutiva'],
            ['nombre_clase' => 'Primera Clase'],
        ];

        DB::table('clases_vuelos')->insert($clases);
    }
}
