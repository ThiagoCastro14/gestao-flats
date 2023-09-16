<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('demanda_limpezas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_apartamento');
            $table->foreign('id_apartamento')->references('id')->on('apartamentos');
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users');
            $table->string('tipo_hospedagem');
            $table->string('horario_hospede')->nullable();
            $table->string('observacoes')->nullable();
            $table->timestamps();
            
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('demanda_limpezas');
    }
};
