<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('completed_demand', function (Blueprint $table) {
            $table->id();  
            $table->unsignedBigInteger('id_demand_clear');
            $table->foreign('id_demand_clear')->references('id')->on('demand_clears');
            $table->unsignedBigInteger('id_check_list_clear');
            $table->foreign('id_check_list_clear')->references('id')->on('check_list_clears');  
            $table->unsignedBigInteger('id_check_list_conference');
            $table->foreign('id_check_list_conference')->references('id')->on('check_list_conferences'); 
            $table->unsignedBigInteger('id_image_list');
            $table->foreign('id_image_list')->references('id')->on('image_lists');          
            $table->timestamps();
        });
    }

   
    public function down(): void
    {
        Schema::dropIfExists('completed_demand');
    }
};
