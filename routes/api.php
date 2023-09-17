<?php

use App\Http\Controllers\Api\Auth\InvoiceController;
use App\Http\Controllers\Api\Auth\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TesteController;
use Illuminate\Support\Facades\Route;



Route::prefix('Auth')->group(function () {
  Route::get('/users', [UserController::class, 'index']);

  Route::post('/login', [AuthController::class, 'login']);
  Route::middleware('auth:sanctum')->group(function () {   
    Route::get('/users/{user}', [UserController::class, 'show'])->middleware('ability:user-get');
    Route::post('/logout', [AuthController::class, 'logout']);
  });

  Route::apiResource('invoices', InvoiceController::class);
});