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
        Schema::create('notificacion', function (Blueprint $table) {
            $table->id('id_notificacion');
            $table->enum('tipo_notificacion',['disponibilidad','pago']);
            $table->text('id_mensaje');
            $table->foreignId('id_usuario') ->constrained('usuario', 'id_usuario') ->cascadeOnUpdate()->cascadeOnDelete() ;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notificacion');
    }
};
