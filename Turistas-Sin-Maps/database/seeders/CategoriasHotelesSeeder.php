<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriasHotelesSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('categorias_hoteles')->insert([
            ['nombre_categoria' => '1 Estrella', 'created_at' => now(), 'updated_at' => now()],
            ['nombre_categoria' => '2 Estrellas', 'created_at' => now(), 'updated_at' => now()],
            ['nombre_categoria' => '3 Estrellas', 'created_at' => now(), 'updated_at' => now()],
            ['nombre_categoria' => '4 Estrellas', 'created_at' => now(), 'updated_at' => now()],
            ['nombre_categoria' => '5 Estrellas', 'created_at' => now(), 'updated_at' => now()],
            ['nombre_categoria' => 'Calidad Diamante', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
