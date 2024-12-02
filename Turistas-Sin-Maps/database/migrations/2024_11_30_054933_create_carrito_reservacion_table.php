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
            $table->id(); // ID único para cada entrada en el carrito
            $table->foreignId('id_vuelo')->nullable() // Relación con vuelos
                  ->constrained('vuelos')
                  ->onDelete('set null')
                  ->onUpdate('cascade');
            $table->foreignId('id_hotel')->nullable() // Relación con hoteles (opcional)
                  ->constrained('hoteles')
                  ->onDelete('set null')
                  ->onUpdate('cascade');
            $table->integer('cantidad')->default(1); // Cantidad de pasajeros o habitaciones
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
