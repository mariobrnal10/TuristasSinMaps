<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HotelesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $hoteles = [
            // Hoteles en Querétaro
            [
                'nombre' => 'Plaza Camelinas Hotel',
                'zona' => 'Querétaro',
                'num_habitaciones' => 150,
                'habitaciones_disponibles' => 50,
                'id_categoria' => 4,
                'precio_noche' => 1200.00,
                'foto' => 'img/hoteles/hotel1.jpg',
            ],
            [
                'nombre' => 'Hotel Mirage',
                'zona' => 'Querétaro',
                'num_habitaciones' => 100,
                'habitaciones_disponibles' => 30,
                'id_categoria' => 4,
                'precio_noche' => 1100.00,
                'foto' => 'img/hoteles/hotel2.jpg',
            ],
            [
                'nombre' => 'Hotel Real Alameda',
                'zona' => 'Querétaro',
                'num_habitaciones' => 80,
                'habitaciones_disponibles' => 20,
                'id_categoria' => 4,
                'precio_noche' => 1300.00,
                'foto' => 'img/hoteles/hotel3.webp',
            ],
            // Hoteles en Baja California Sur
            [
                'nombre' => 'Riu Palace Baja California',
                'zona' => 'Cabo San Lucas',
                'num_habitaciones' => 600,
                'habitaciones_disponibles' => 200,
                'id_categoria' => 5,
                'precio_noche' => 3500.00,
                'foto' => 'img/hoteles/hotel4.jpg',
            ],
            [
                'nombre' => 'The Westin Los Cabos Resort Villas & Spa',
                'zona' => 'San José del Cabo',
                'num_habitaciones' => 250,
                'habitaciones_disponibles' => 80,
                'id_categoria' => 5,
                'precio_noche' => 4000.00,
                'foto' => 'img/hoteles/hotel5.jpg',
            ],
            [
                'nombre' => 'Hotel San Cristóbal',
                'zona' => 'Todos Santos',
                'num_habitaciones' => 32,
                'habitaciones_disponibles' => 10,
                'id_categoria' => 4,
                'precio_noche' => 2800.00,
                'foto' => 'img/hoteles/hotel6.jpg',
            ],
            // Primer hotel en Quintana Roo
            [
                'nombre' => 'The Westin Lagunamar Ocean Resort',
                'zona' => 'Cancún',
                'num_habitaciones' => 580,
                'habitaciones_disponibles' => 150,
                'id_categoria' => 5,
                'precio_noche' => 3200.00,
                'foto' => 'img/hoteles/hotel7.jpg',
            ],
        ];
        
        foreach ($hoteles as $hotel) {
            DB::table('hoteles')->insert($hotel);
        }
        

        foreach ($hoteles as $hotel) {
            DB::table('hoteles')->insert($hotel);
        }
    }
}
