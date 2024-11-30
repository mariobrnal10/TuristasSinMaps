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
        Schema::create('reservas_hoteles', function (Blueprint $table) {
            $table->id(); // id_reserva
            $table->foreignId('id_usuario') // Relación con usuarios
                  ->constrained('usuarios')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->foreignId('id_hotel') // Relación con hoteles
                  ->constrained('hoteles')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->integer('num_habitaciones'); // Número de habitaciones reservadas
            $table->date('fecha_check_in'); // Fecha de entrada
            $table->date('fecha_check_out'); // Fecha de salida
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
        Schema::dropIfExists('reservas_hoteles');
    }
};
