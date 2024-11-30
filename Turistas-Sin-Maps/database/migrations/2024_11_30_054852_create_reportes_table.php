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
        Schema::create('reportes', function (Blueprint $table) {
            $table->id(); // id_reporte
            $table->foreignId('id_usuario') // Relación con usuarios (administradores)
                  ->constrained('usuarios')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->string('descripcion', 255); // Descripción del reporte
            $table->enum('tipo', ['financiero', 'operativo']); // Tipo de reporte
            $table->json('datos'); // Datos del reporte en formato JSON
            $table->timestamp('fecha_generacion')->useCurrent(); // Fecha de generación
            $table->timestamps(); // created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reportes');
    }
};
