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
        Schema::create('calendario_feriados', function (Blueprint $table) {
            $table->id('id_calendario_feriados');
            $table->date('fecha_calendario_feriados');
            $table->string('descripcion_calendario_feriados',250);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calendario_feriados');
    }
};
