<?php

use App\Http\Controllers\ApartamentosController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\FornecedoresController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});

Route::prefix('produtos')->group(function () {
    Route::get('/', [ProdutosController::class, 'index'])->name('produto.index');
    // Criar Cadastro
    Route::get('/cadastrarProduto', [ProdutosController::class, 'cadastrarProduto'])->name('cadastrar.produto');
    Route::post('/cadastrarProduto', [ProdutosController::class, 'cadastrarProduto'])->name('cadastrar.produto');  
    // Atualizar Cadastro
    Route::get('/atualizarProduto/{id}', [ProdutosController::class, 'atualizarProduto'])->name('atualizar.produto');
    Route::put('/atualizarProduto/{id}', [ProdutosController::class, 'atualizarProduto'])->name('atualizar.produto');  
    //Deletar Cadastro
    Route::delete('/delete', [ProdutosController::class, 'delete'])->name('produto.delete');
});

Route::prefix('fornecedores')->group(function () {
    Route::get('/', [FornecedoresController::class, 'index'])->name('fornecedor.index');
    // Criar Cadastro
    Route::get('/cadastrarFornecedor', [FornecedoresController::class, 'cadastrarFornecedor'])->name('cadastrar.fornecedor');
    Route::post('/cadastrarFornecedor', [FornecedoresController::class, 'cadastrarFornecedor'])->name('cadastrar.fornecedor');  
    // Atualizar Cadastro
    Route::get('/atualizarFornecedor/{id}', [FornecedoresController::class, 'atualizarFornecedor'])->name('atualizar.fornecedor');
    Route::put('/atualizarFornecedor/{id}', [FornecedoresController::class, 'atualizarFornecedor'])->name('atualizar.fornecedor');  
    //Deletar Cadastro
    Route::delete('/delete', [FornecedoresController::class, 'delete'])->name('fornecedor.delete');
});

Route::prefix('apartamentos')->group(function () {
    Route::get('/', [ApartamentosController::class, 'index'])->name('apartamento.index');
    // Criar Cadastro
    Route::get('/cadastrarApartamento', [ApartamentosController::class, 'cadastrarApartamento'])->name('cadastrar.apartamento');
    Route::post('/cadastrarApartamento', [ApartamentosController::class, 'cadastrarApartamento'])->name('cadastrar.apartamento');  
    // Atualizar Cadastro
    Route::get('/atualizarApartamento/{id}', [ApartamentosController::class, 'atualizarApartamento'])->name('atualizar.apartamento');
    Route::put('/atualizarApartamento/{id}', [ApartamentosController::class, 'atualizarApartamento'])->name('atualizar.apartamento');  
    //Deletar Cadastro
    Route::delete('/delete', [ApartamentosController::class, 'delete'])->name('apartamento.delete');
});

Route::prefix('demanda-limpezas')->group(function () {
    Route::get('/', [DemandaLimpezasController::class, 'index'])->name('demandaLimpeza.index');
    // Criar Cadastro
    Route::get('/cadastrarDemandaLimpeza', [DemandaLimpezasController::class, 'cadastrarDemandaLimpeza'])->name('cadastrar.demandaLimpeza');
    Route::post('/cadastrarDemandaLimpeza', [DemandaLimpezasController::class, 'cadastrarDemandaLimpeza'])->name('cadastrar.demandaLimpeza');  
    // Atualizar Cadastro
    Route::get('/atualizarDemandaLimpeza/{id}', [DemandaLimpezasController::class, 'atualizarDemandaLimpeza'])->name('atualizar.demandaLimpeza');
    Route::put('/atualizarDemandaLimpeza/{id}', [DemandaLimpezasController::class, 'atualizarDemandaLimpeza'])->name('atualizar.demandaLimpeza');  
    //Deletar Cadastro
    Route::delete('/delete', [DemandaLimpezasController::class, 'delete'])->name('demandaLimpeza.delete');
});

Route::prefix('check-list-limpezas')->group(function () {
    Route::get('/', [CheckListLimpezasController::class, 'index'])->name('checkListLimpeza.index');
    // Criar Cadastro
    Route::get('/cadastrarCheckListLimpeza', [CheckListLimpezasController::class, 'cadastrarCheckListLimpeza'])->name('cadastrar.checkListLimpeza');
    Route::post('/cadastrarCheckListLimpeza', [CheckListLimpezasController::class, 'cadastrarCheckListLimpeza'])->name('cadastrar.checkListLimpeza');  
   
});
Route::prefix('check-list-conferencias')->group(function () {
    Route::get('/', [CheckListConferenciasController::class, 'index'])->name('checkListConferencia.index');
    // Criar Cadastro
    Route::get('/cadastrarCheckListConferencia', [CheckListConferenciasController::class, 'cadastrarCheckConferencia'])->name('cadastrar.checkListConferencia');
    Route::post('/cadastrarCheckListConferencia', [CheckListConferenciasController::class, 'cadastrarCheckConferencia'])->name('cadastrar.checkListConferencia');  
   
});

Route::prefix('demandas-finalizadas')->group(function () {
    Route::get('/', [DemandaFinalizadaController::class, 'index'])->name('demandaFinalizada.index');    
   
   
});