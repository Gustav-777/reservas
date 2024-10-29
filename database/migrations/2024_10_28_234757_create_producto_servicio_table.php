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
        Schema::create('producto_servicio', function (Blueprint $table) {
            $table->id('id_producto_servicio');
            $table->string('nombre_producto_servicio');
            $table->text('descripcion_producto_servicio');
            $table->enum('tipo_producto_servicio',['hotel','restaurant','agencia de turismo']);
            $table->decimal('precio_producto_servicio');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('producto_servicio');
    }
};
