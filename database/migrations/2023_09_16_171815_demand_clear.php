<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('demand_clears', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_apartment');
            $table->foreign('id_apartment')->references('id')->on('apartments');
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users');
            $table->unsignedBigInteger('id_guest');
            $table->foreign('id_guest')->references('id')->on('guests');
            $table->unsignedBigInteger('id_guest_time');
            $table->foreign('id_guest_time')->references('id')->on('guests');            
            $table->string('comments')->nullable();
            $table->timestamps();
            
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('demanda_limpezas');
    }
};
