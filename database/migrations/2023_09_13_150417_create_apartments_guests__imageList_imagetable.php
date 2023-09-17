<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up(): void
    {
        Schema::create('apartments', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->string('owner');
            $table->string('address');
            $table->integer('ap_number');
            $table->string('phone');
            $table->timestamps();
        });

        Schema::create('guests', function (Blueprint $table) {
            $table->id();
            $table->string('guest_type');    
            $table->string('guest_time')->nullable();       
            $table->timestamps();       
        });

        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->string('image_path');
            $table->timestamps();
        });

        Schema::create('image_lists', function (Blueprint $table) {
            $table->id();          
            $table->timestamps();
        });
       
        Schema::table('image_lists', function (Blueprint $table) {
            $table->unsignedBigInteger('id_image');
            $table->foreign('id_image')->references('id')->on('images');
        });
    }

    
    
    public function down(): void
    {
        Schema::dropIfExists('apartments');
    }
};
