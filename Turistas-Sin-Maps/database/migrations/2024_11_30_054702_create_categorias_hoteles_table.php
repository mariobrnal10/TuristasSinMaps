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
        Schema::create('categorias_hoteles', function (Blueprint $table) {
            $table->id(); // id_categoria
            $table->string('nombre_categoria', 50); // Nombre de la categoría (1 estrella, 5 estrellas, etc.)
            $table->timestamps(); // created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categorias_hoteles');
    }
};
