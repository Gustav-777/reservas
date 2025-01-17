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
        Schema::create('reserva', function (Blueprint $table) {
            $table->id('id_reserva');
            $table->date('fecha_reserva');
            $table->date('fecha_inicio_reserva');
            $table->date('fecha_fin_reserva');
            $table->integer('numero_personas_reserva');
            $table->enum('estado_reserva',['confirmada','cancelada','pendiente'])->default('pendiente');
            $table->foreignID('id_usuario')->constrained('usuario','id_usuario')->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reserva');
    }
};
