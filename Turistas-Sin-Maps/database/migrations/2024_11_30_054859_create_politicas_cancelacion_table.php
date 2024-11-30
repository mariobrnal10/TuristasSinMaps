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
        Schema::create('politicas_cancelacion', function (Blueprint $table) {
            $table->id(); // id_politica
            $table->string('descripcion', 255); // Descripción de la política
            $table->text('condiciones'); // Condiciones de la política
            $table->timestamps(); // created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('politicas_cancelacion');
    }
};
