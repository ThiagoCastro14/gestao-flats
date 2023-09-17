<?php

use App\Http\Controllers\ApartmentsController;
use App\Http\Controllers\CheckListClearController;
use App\Http\Controllers\CheckListConferenceController;
use App\Http\Controllers\CompletedDemandController;
use App\Http\Controllers\DemandClearController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;
use App\Models\CompletedDemand;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});

Route::prefix('products')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('product.index');
    // Criar Cadastro
    Route::get('/updateProduct', [ProductController::class, 'updateProduct'])->name('create.product');
    Route::post('/createProduct', [ProductController::class, 'createProduct'])->name('create.product');  
    // update Cadastro
    Route::get('/updateProduct/{id}', [ProductController::class, 'updateProduct'])->name('update.product');
    Route::put('/updateProduct/{id}', [ProductController::class, 'updateProduct'])->name('update.product');  
    //Deletar Cadastro
    Route::delete('/delete', [ProductController::class, 'delete'])->name('product.delete');
});

Route::prefix('suppliers')->group(function () {
    Route::get('/', [SupplierController::class, 'index'])->name('supplier.index');
    // Criar Cadastro
    Route::get('/createSupplier', [SupplierController::class, 'createSupplier'])->name('create.supplier');
    Route::post('/createSupplier', [SupplierController::class, 'createSupplier'])->name('create.supplier');  
    // update Cadastro
    Route::get('/updateSupplier/{id}', [SupplierController::class, 'updateSupplier'])->name('update.supplier');
    Route::put('/updateSupplier/{id}', [SupplierController::class, 'updateSupplier'])->name('update.supplier');  
    //Deletar Cadastro
    Route::delete('/delete', [SupplierController::class, 'delete'])->name('supplier.delete');
});

Route::prefix('apartments')->group(function () {
    Route::get('/', [ApartmentsController::class, 'index'])->name('apartment.index');
    // Criar Cadastro
    Route::get('/createApartment', [ApartmentsController::class, 'createApartment'])->name('create.apartment');
    Route::post('/createApartment', [ApartmentsController::class, 'createApartment'])->name('create.apartment');  
    // update Cadastro
    Route::get('/updateApartment/{id}', [ApartmentsController::class, 'updateApartment'])->name('update.apartment');
    Route::put('/updateApartment/{id}', [ApartmentsController::class, 'updateApartment'])->name('update.apartment');  
    //Deletar Cadastro
    Route::delete('/delete', [ApartmentsController::class, 'delete'])->name('apartment.delete');
});

Route::prefix('demanda-clear')->group(function () {
    Route::get('/', [DemandClearController::class, 'index'])->name('demandClear.index');
    // Criar Cadastro
    Route::get('/createDemandClear', [DemandClearController::class, 'createDemandClear'])->name('create.demandClear');
    Route::post('/createDemandClear', [DemandClearController::class, 'createDemandClear'])->name('create.demandClear');  
    // update Cadastro
    Route::get('/updateDemandClear/{id}', [DemandClearController::class, 'updateDemandClear'])->name('update.demandClear');
    Route::put('/updateDemandClear/{id}', [DemandClearController::class, 'updateDemandClear'])->name('update.demandClear');  
    //Deletar Cadastro
    Route::delete('/delete', [DemandClearController::class, 'delete'])->name('demandClear.delete');
});

Route::prefix('check-list-clear')->group(function () {
    Route::get('/', [CheckListClearController::class, 'index'])->name('checkListClear.index');
    // Criar Cadastro
    Route::get('/createCheckListClear', [CheckListClearController::class, 'createCheckListClear'])->name('create.checkListClear');
    Route::post('/createCheckListClear', [CheckListClearController::class, 'createCheckListClear'])->name('create.checkListClear');  
   
});
Route::prefix('check-list-conference')->group(function () {
    Route::get('/', [CheckListConferenceController::class, 'index'])->name('checkListConference.index');
    // Criar Cadastro
    Route::get('/createCheckListConference', [CheckListConferenceController::class, 'createCheckListConference'])->name('create.checkListConference');
    Route::post('/createCheckListConference', [CheckListConferenceController::class, 'createCheckListConference'])->name('create.checkListConference');  
   
});

Route::prefix('completed-demand')->group(function () {
    Route::get('/', [CompletedDemandController::class, 'index'])->name('completedDemand.index');   
     
   
   
});