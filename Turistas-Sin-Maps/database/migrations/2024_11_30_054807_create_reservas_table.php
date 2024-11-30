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
        Schema::create('reservas', function (Blueprint $table) {
            $table->id(); // id_reserva
            $table->foreignId('id_usuario') // Relación con usuarios
                  ->constrained('usuarios')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->foreignId('id_vuelo') // Relación con vuelos
                  ->constrained('vuelos')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->integer('cantidad_pasajeros'); // Cantidad de pasajeros
            $table->decimal('precio_total', 10, 2); // Precio total de la reservación
            $table->enum('estado', ['confirmada', 'cancelada'])
                  ->default('confirmada'); // Estado de la reservación
            $table->timestamps(); // created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservas');
    }
};
