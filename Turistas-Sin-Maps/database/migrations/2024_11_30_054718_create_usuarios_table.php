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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id(); // id_usuario
            $table->string('nombre', 255); // Nombre del usuario
            $table->string('apellido', 255); // Apellido del usuario
            $table->string('email', 255)->unique(); // Email único
            $table->string('telefono', 20)->nullable(); // Teléfono
            $table->string('contraseña', 255); // Contraseña
            $table->string('codigo_verificacion', 6)->nullable(); // Código de verificación
            $table->boolean('verificado')->default(false); // Estado de verificación
            $table->foreignId('id_rol') // Llave foránea hacia roles
                  ->constrained('roles')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->timestamps(); // created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
