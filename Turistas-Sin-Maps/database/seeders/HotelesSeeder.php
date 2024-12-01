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
            [
                'nombre' => 'Hotel Paraíso Maya',
                'zona' => 'Cancún',
                'num_habitaciones' => 150,
                'habitaciones_disponibles' => 30,
                'id_categoria' => 4,
                'precio_noche' => 3500.00,
            ],
            [
                'nombre' => 'Hotel Playa Azul',
                'zona' => 'Tulum',
                'num_habitaciones' => 120,
                'habitaciones_disponibles' => 50,
                'id_categoria' => 3,
                'precio_noche' => 2500.00,
            ],
            [
                'nombre' => 'Hotel Real del Mar',
                'zona' => 'Puerto Vallarta',
                'num_habitaciones' => 200,
                'habitaciones_disponibles' => 80,
                'id_categoria' => 5,
                'precio_noche' => 4200.00,
            ],
            [
                'nombre' => 'Hotel Diamante',
                'zona' => 'Los Cabos',
                'num_habitaciones' => 100,
                'habitaciones_disponibles' => 20,
                'id_categoria' => 6,
                'precio_noche' => 5000.00,
            ],
            [
                'nombre' => 'Hotel Sol Caribe',
                'zona' => 'Cancún',
                'num_habitaciones' => 90,
                'habitaciones_disponibles' => 10,
                'id_categoria' => 4,
                'precio_noche' => 3200.00,
            ],
            [
                'nombre' => 'Hotel Montaña Encantada',
                'zona' => 'San Cristóbal de las Casas',
                'num_habitaciones' => 60,
                'habitaciones_disponibles' => 25,
                'id_categoria' => 3,
                'precio_noche' => 1800.00,
            ],
            [
                'nombre' => 'Hotel Jardín Secreto',
                'zona' => 'Guadalajara',
                'num_habitaciones' => 80,
                'habitaciones_disponibles' => 40,
                'id_categoria' => 4,
                'precio_noche' => 2700.00,
            ],
            [
                'nombre' => 'Hotel Estrella de la Playa',
                'zona' => 'Mazatlán',
                'num_habitaciones' => 200,
                'habitaciones_disponibles' => 100,
                'id_categoria' => 5,
                'precio_noche' => 3800.00,
            ],
            [
                'nombre' => 'Hotel Vista Mar',
                'zona' => 'Acapulco',
                'num_habitaciones' => 110,
                'habitaciones_disponibles' => 30,
                'id_categoria' => 4,
                'precio_noche' => 3000.00,
            ],
            [
                'nombre' => 'Hotel Cielo Azul',
                'zona' => 'Playa del Carmen',
                'num_habitaciones' => 70,
                'habitaciones_disponibles' => 15,
                'id_categoria' => 3,
                'precio_noche' => 2200.00,
            ],
            [
                'nombre' => 'Hotel Amanecer Dorado',
                'zona' => 'Zacatecas',
                'num_habitaciones' => 90,
                'habitaciones_disponibles' => 50,
                'id_categoria' => 2,
                'precio_noche' => 1600.00,
            ],
            [
                'nombre' => 'Hotel Las Cascadas',
                'zona' => 'Chiapas',
                'num_habitaciones' => 80,
                'habitaciones_disponibles' => 35,
                'id_categoria' => 3,
                'precio_noche' => 2400.00,
            ],
            [
                'nombre' => 'Hotel Valle Encantado',
                'zona' => 'Valle de Bravo',
                'num_habitaciones' => 100,
                'habitaciones_disponibles' => 45,
                'id_categoria' => 5,
                'precio_noche' => 3900.00,
            ],
            [
                'nombre' => 'Hotel Aurora Boreal',
                'zona' => 'Monterrey',
                'num_habitaciones' => 120,
                'habitaciones_disponibles' => 70,
                'id_categoria' => 4,
                'precio_noche' => 3200.00,
            ],
            [
                'nombre' => 'Hotel Refugio de la Luna',
                'zona' => 'Oaxaca',
                'num_habitaciones' => 50,
                'habitaciones_disponibles' => 25,
                'id_categoria' => 3,
                'precio_noche' => 1900.00,
            ],
            [
                'nombre' => 'Hotel Paraíso Escondido',
                'zona' => 'Huatulco',
                'num_habitaciones' => 130,
                'habitaciones_disponibles' => 60,
                'id_categoria' => 5,
                'precio_noche' => 4100.00,
            ],
            [
                'nombre' => 'Hotel Hacienda Real',
                'zona' => 'Querétaro',
                'num_habitaciones' => 70,
                'habitaciones_disponibles' => 20,
                'id_categoria' => 4,
                'precio_noche' => 3000.00,
            ],
            [
                'nombre' => 'Hotel Mirador del Sol',
                'zona' => 'San Miguel de Allende',
                'num_habitaciones' => 40,
                'habitaciones_disponibles' => 10,
                'id_categoria' => 3,
                'precio_noche' => 2000.00,
            ],
            [
                'nombre' => 'Hotel Bosque Mágico',
                'zona' => 'Morelia',
                'num_habitaciones' => 60,
                'habitaciones_disponibles' => 30,
                'id_categoria' => 4,
                'precio_noche' => 2500.00,
            ],
            [
                'nombre' => 'Hotel Arena Blanca',
                'zona' => 'Puerto Escondido',
                'num_habitaciones' => 50,
                'habitaciones_disponibles' => 20,
                'id_categoria' => 3,
                'precio_noche' => 2200.00,
            ],
        ];

        foreach ($hoteles as $hotel) {
            DB::table('hoteles')->insert($hotel);
        }
    }
}
