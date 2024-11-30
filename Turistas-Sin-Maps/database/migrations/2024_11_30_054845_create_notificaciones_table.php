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
        Schema::create('notificaciones', function (Blueprint $table) {
            $table->id(); // id_notificacion
            $table->foreignId('id_usuario') // Relación con usuarios
                  ->constrained('usuarios')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->string('mensaje', 255); // Mensaje de la notificación
            $table->enum('tipo', ['registro', 'recordatorio', 'actualización']); // Tipo de notificación
            $table->timestamp('fecha_envio')->useCurrent(); // Fecha de envío
            $table->timestamps(); // created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notificaciones');
    }
};
