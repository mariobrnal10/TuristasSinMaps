<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('servicios_hoteles', function (Blueprint $table) {
            $table->foreignId('id_hotel') // Relación con hoteles
                  ->constrained('hoteles')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->foreignId('id_servicio') // Relación con servicios
                  ->constrained('servicios')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->primary(['id_hotel', 'id_servicio']); // Clave compuesta
            $table->timestamps(); // created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servicios_hoteles');
    }
};
