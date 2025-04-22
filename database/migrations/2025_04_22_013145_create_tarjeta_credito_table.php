<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('tarjeta_credito', function (Blueprint $table) {
            $table->id('id_tarjetaC');
            $table->decimal('cupo', 10, 2);
            $table->string('calificacion_cartera');
  
            $table->unsignedBigInteger('id_cliente_producto');
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tarjeta_credito');
    }
};
