<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('check_list_conferences', function (Blueprint $table) {
            $table->id();                 
            $table->boolean('check_tv')->default(false);
            $table->boolean('check_bathroom')->default(false);
            $table->boolean('check_lamps')->default(false);
            $table->boolean('check_wifi')->default(false);
            $table->boolean('check_kitchen')->default(false);
            $table->boolean('check_clear_items')->default(false);
            $table->boolean('check_stove')->default(false);
            $table->boolean('check_air')->default(false);
            $table->timestamps();
            $table->unsignedBigInteger('id_demand_clear');
            $table->foreign('id_demand_clear')->references('id')->on('demand_clears');
            $table->unsignedBigInteger('id_check_list_clear');
            $table->foreign('id_check_list_clear')->references('id')->on('check_list_clears');
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users');
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('check_list_conferencias');
    }
};
