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
        Schema::create('vuelos', function (Blueprint $table) {
            $table->id(); // id_vuelo
            $table->foreignId('id_aerolinea') // Relación con aerolíneas
                  ->constrained('aerolineas')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->string('origen', 255); // Ciudad de origen
            $table->string('destino', 255); // Ciudad de destino
            $table->date('fecha_salida'); // Fecha de salida
            $table->time('hora_salida'); // Hora de salida
            $table->date('fecha_llegada'); // Fecha de llegada
            $table->time('hora_llegada'); // Hora de llegada
            $table->integer('num_asientos'); // Total de asientos
            $table->integer('asientos_disponibles'); // Asientos disponibles
            $table->foreignId('id_clase') // Relación con clases de vuelo
                  ->constrained('clases_vuelos')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->decimal('precio', 10, 2); // Precio del vuelo
            $table->enum('estado', ['disponible', 'ocupado', 'cancelado'])
                  ->default('disponible'); // Estado del vuelo
            $table->timestamps(); // created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vuelos');
    }
};
