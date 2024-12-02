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
        Schema::create('hoteles', function (Blueprint $table) {
            $table->id(); // id_hotel
            $table->string('nombre', 255); // Nombre del hotel
            $table->string('zona', 255); // Ubicación del hotel
            $table->integer('num_habitaciones'); // Total de habitaciones
            $table->integer('habitaciones_disponibles'); // Habitaciones disponibles
            $table->foreignId('id_categoria') // Relación con categorías de hoteles
                  ->constrained('categorias_hoteles')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->decimal('precio_noche', 10, 2); // Precio por noche
            $table->string('foto')->nullable(); // Columna para la foto
            $table->timestamps(); // created_at y updated_at
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hoteles');
    }
};
