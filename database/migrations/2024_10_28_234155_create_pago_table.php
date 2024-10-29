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
        Schema::create('pago', function (Blueprint $table) {
            $table->id('id_pago');
            $table->decimal('monto_pago');
            $table->date('fecha_pago');
            $table->enum('metodo_pago',['tarjeta','yape','plin','transferencia']);
            $table->enum('estado_pago',['completo','incompleto','fallido']);
            $table->foreignID('id_reserva')->constrained('reserva','id_reserva')->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pago');
    }
};
