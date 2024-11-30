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
        Schema::create('carrito_reservacion', function (Blueprint $table) {
            $table->id(); // id_carrito
            $table->foreignId('id_usuario') // Relación con usuarios
                  ->constrained('usuarios')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->foreignId('id_vuelo')->nullable() // Relación con vuelos (opcional)
                  ->constrained('vuelos')
                  ->onDelete('set null')
                  ->onUpdate('cascade');
            $table->foreignId('id_hotel')->nullable() // Relación con hoteles (opcional)
                  ->constrained('hoteles')
                  ->onDelete('set null')
                  ->onUpdate('cascade');
            $table->integer('cantidad'); // Cantidad de pasajeros o habitaciones
            $table->decimal('precio_parcial', 10, 2); // Precio parcial de la reserva
            $table->timestamps(); // created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carrito_reservacion');
    }
};
