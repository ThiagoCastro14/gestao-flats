<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up(): void
    {
        Schema::create('check_list_clears', function (Blueprint $table) {
            $table->id();           
            $table->boolean('amenities')->default(false);
            $table->boolean('layettes')->default(false);
            $table->timestamps();
            $table->unsignedBigInteger('id_demand_clear');
            $table->foreign('id_demand_clear')->references('id')->on('demand_clears');         
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users');
            $table->unsignedBigInteger('id_image_list');
            $table->foreign('id_image_list')->references('id')->on('image_lists');
        });
    }

   
    public function down(): void
    {
        Schema::dropIfExists('check_list_clears');
    }
};
