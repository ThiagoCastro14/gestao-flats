<?php

use App\Http\Controllers\ProdutosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

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
    Route::get('/', [fornecedoresController::class, 'index'])->name('fornecedores.index');
    // Criar Cadastro
    Route::get('/cadastrarFornecedor', [FornecedoresController::class, 'cadastrarFornecedores'])->name('cadastrar.fornecedor');
    Route::post('/cadastrarFornecedor', [FornecedoresController::class, 'cadastrarCliente'])->name('cadastrar.fornecedor');  
    // Atualizar Cadastro
    Route::get('/atualizarFornecedor/{id}', [FornecedoresController::class, 'atualizarCliente'])->name('atualizar.fornecedor');
    Route::put('/atualizarFornecedor/{id}', [FornecedoresController::class, 'atualizarCliente'])->name('atualizar.fornecedor');  
    //Deletar Cadastro
    Route::delete('/delete', [FornecedoresController::class, 'delete'])->name('fornecedor.delete');
});
