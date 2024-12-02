<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call(CategoriasHotelesSeeder::class);
        $this->call(ClasesVuelosSeeder::class);
        $this->call(AerolineasSeeder::class);
        $this->call(VuelosSeeder::class);
        $this->call(HotelesSeeder::class);
    }
}
