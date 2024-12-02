<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VuelosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $vuelos = [
            // Vuelo 1: Ciudad de México a Cancún
            [
                'id_aerolinea' => 1, // ID de aerolínea (asegúrate de tener esta tabla poblada)
                'origen' => 'Ciudad de México',
                'destino' => 'Cancún',
                'fecha_salida' => '2024-12-01',
                'hora_salida' => '08:00:00',
                'fecha_llegada' => '2024-12-01',
                'hora_llegada' => '10:00:00',
                'num_asientos' => 200,
                'asientos_disponibles' => 50,
                'id_clase' => 1, // Económica
                'precio' => 3500.00,
                'estado' => 'disponible',
            ],
            // Vuelo 2: Monterrey a Querétaro
            [
                'id_aerolinea' => 2,
                'origen' => 'Monterrey',
                'destino' => 'Querétaro',
                'fecha_salida' => '2024-12-02',
                'hora_salida' => '14:00:00',
                'fecha_llegada' => '2024-12-02',
                'hora_llegada' => '15:30:00',
                'num_asientos' => 150,
                'asientos_disponibles' => 20,
                'id_clase' => 2, // Ejecutiva
                'precio' => 4500.00,
                'estado' => 'disponible',
            ],
            // Vuelo 3: Guadalajara a Tijuana
            [
                'id_aerolinea' => 3,
                'origen' => 'Guadalajara',
                'destino' => 'Tijuana',
                'fecha_salida' => '2024-12-03',
                'hora_salida' => '18:00:00',
                'fecha_llegada' => '2024-12-03',
                'hora_llegada' => '21:00:00',
                'num_asientos' => 100,
                'asientos_disponibles' => 10,
                'id_clase' => 3, // Primera Clase
                'precio' => 6000.00,
                'estado' => 'ocupado',
            ],
            // Vuelo 4: Querétaro a Los Cabos
            [
                'id_aerolinea' => 1,
                'origen' => 'Querétaro',
                'destino' => 'Los Cabos',
                'fecha_salida' => '2024-12-04',
                'hora_salida' => '07:00:00',
                'fecha_llegada' => '2024-12-04',
                'hora_llegada' => '09:30:00',
                'num_asientos' => 180,
                'asientos_disponibles' => 60,
                'id_clase' => 1,
                'precio' => 4000.00,
                'estado' => 'disponible',
            ],
            // Vuelo 5: Cancún a Guadalajara
            [
                'id_aerolinea' => 2,
                'origen' => 'Cancún',
                'destino' => 'Guadalajara',
                'fecha_salida' => '2024-12-05',
                'hora_salida' => '09:00:00',
                'fecha_llegada' => '2024-12-05',
                'hora_llegada' => '12:00:00',
                'num_asientos' => 160,
                'asientos_disponibles' => 40,
                'id_clase' => 2,
                'precio' => 5000.00,
                'estado' => 'ocupado',
            ],
            // Vuelo 6: Tijuana a Monterrey
            [
                'id_aerolinea' => 3,
                'origen' => 'Tijuana',
                'destino' => 'Monterrey',
                'fecha_salida' => '2024-12-06',
                'hora_salida' => '10:00:00',
                'fecha_llegada' => '2024-12-06',
                'hora_llegada' => '13:30:00',
                'num_asientos' => 150,
                'asientos_disponibles' => 50,
                'id_clase' => 3,
                'precio' => 5500.00,
                'estado' => 'cancelado',
            ],
            // Vuelo 7: Ciudad de México a Puerto Vallarta
            [
                'id_aerolinea' => 1,
                'origen' => 'Ciudad de México',
                'destino' => 'Puerto Vallarta',
                'fecha_salida' => '2024-12-07',
                'hora_salida' => '11:00:00',
                'fecha_llegada' => '2024-12-07',
                'hora_llegada' => '13:00:00',
                'num_asientos' => 200,
                'asientos_disponibles' => 90,
                'id_clase' => 1,
                'precio' => 3000.00,
                'estado' => 'disponible',
            ],
            // Vuelo 8: Los Cabos a Ciudad de México
            [
                'id_aerolinea' => 2,
                'origen' => 'Los Cabos',
                'destino' => 'Ciudad de México',
                'fecha_salida' => '2024-12-08',
                'hora_salida' => '15:00:00',
                'fecha_llegada' => '2024-12-08',
                'hora_llegada' => '17:30:00',
                'num_asientos' => 100,
                'asientos_disponibles' => 30,
                'id_clase' => 2,
                'precio' => 3800.00,
                'estado' => 'disponible',
            ],
            // Vuelo 9: Querétaro a Cancún
            [
                'id_aerolinea' => 3,
                'origen' => 'Querétaro',
                'destino' => 'Cancún',
                'fecha_salida' => '2024-12-09',
                'hora_salida' => '13:00:00',
                'fecha_llegada' => '2024-12-09',
                'hora_llegada' => '15:30:00',
                'num_asientos' => 180,
                'asientos_disponibles' => 70,
                'id_clase' => 3,
                'precio' => 4500.00,
                'estado' => 'ocupado',
            ],
            // Vuelo 10: Guadalajara a Los Cabos
            [
                'id_aerolinea' => 1,
                'origen' => 'Guadalajara',
                'destino' => 'Los Cabos',
                'fecha_salida' => '2024-12-10',
                'hora_salida' => '08:00:00',
                'fecha_llegada' => '2024-12-10',
                'hora_llegada' => '10:30:00',
                'num_asientos' => 120,
                'asientos_disponibles' => 40,
                'id_clase' => 1,
                'precio' => 4200.00,
                'estado' => 'disponible',
            ],
        ];

        DB::table('vuelos')->insert($vuelos);
    }
}
