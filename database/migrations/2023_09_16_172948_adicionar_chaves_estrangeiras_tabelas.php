<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up(): void
    {
        Schema::table('check_list_limpezas', function (Blueprint $table) {
            $table->unsignedBigInteger('id_demanda_limpeza');
            $table->foreign('id_demanda_limpeza')->references('id')->on('demanda_limpezas');         
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users');
            $table->unsignedBigInteger('id_image_list');
            $table->foreign('id_image_list')->references('id')->on('image_lists');
        });

       
        Schema::table('check_list_conferencias', function (Blueprint $table) {
            $table->unsignedBigInteger('id_demanda_limpeza');
            $table->foreign('id_demanda_limpeza')->references('id')->on('demanda_limpezas');
            $table->unsignedBigInteger('id_check_list_limpeza');
            $table->foreign('id_check_list_limpeza')->references('id')->on('check_list_limpezas');
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users');
        });

       
        Schema::table('demanda_finalizadas', function (Blueprint $table) {
            $table->unsignedBigInteger('id_demanda_limpeza');
            $table->foreign('id_demanda_limpeza')->references('id')->on('demanda_limpezas');
            $table->unsignedBigInteger('id_check_list_limpeza');
            $table->foreign('id_check_list_limpeza')->references('id')->on('check_list_limpezas');  
            $table->unsignedBigInteger('id_check_list_conferencia');
            $table->foreign('id_check_list_conferencia')->references('id')->on('check_list_conferencias'); 
            $table->unsignedBigInteger('id_image_list');
            $table->foreign('id_image_list')->references('id')->on('image_lists'); 
        });

        Schema::table('image_lists', function (Blueprint $table) {
            $table->unsignedBigInteger('id_image');
            $table->foreign('id_image')->references('id')->on('images');
        });
    }

    
    public function down(): void
    {
       
    }
};
