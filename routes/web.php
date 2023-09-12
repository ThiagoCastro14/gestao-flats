<?php

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
