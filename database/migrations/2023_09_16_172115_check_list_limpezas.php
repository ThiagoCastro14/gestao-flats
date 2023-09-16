<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up(): void
    {
        Schema::create('check_list_limpezas', function (Blueprint $table) {
            $table->id();           
            $table->boolean('amenities')->default(false);
            $table->boolean('enxovais')->default(false);
            $table->timestamps();
        });
    }

   
    public function down(): void
    {
        Schema::dropIfExists('check_list_limpezas');
    }
};
