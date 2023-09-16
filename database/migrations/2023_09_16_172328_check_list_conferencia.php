<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('check_list_conferencias', function (Blueprint $table) {
            $table->id();                 
            $table->boolean('check_tv')->default(false);
            $table->boolean('check_banheiro')->default(false);
            $table->boolean('check_lampadas')->default(false);
            $table->boolean('check_wifi')->default(false);
            $table->boolean('check_cozinha')->default(false);
            $table->boolean('check_itens_limpeza')->default(false);
            $table->boolean('check_fogao')->default(false);
            $table->boolean('check_ar')->default(false);
            $table->timestamps();
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('check_list_conferencias');
    }
};
