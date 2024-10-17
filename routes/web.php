<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerAtividade;
use App\Http\Controllers\Cliente;
use App\Http\Controllers\Produto;

Route::get('/', [ControllerAtividade::class, 'main']);

Route::get('/atividade1', [ControllerAtividade::class, 'atividade1']);

Route::get('/atividade2', [ControllerAtividade::class, 'atividade2']);

Route::get('/atividade3', [ControllerAtividade::class, 'atividade3']);

Route::get('/atividade4', [ControllerAtividade::class, 'atividade4']);

Route::get('/atividade5', [ControllerAtividade::class, 'atividade5']);

Route::get('/atividade6', [ControllerAtividade::class, 'atividade6']);

Route::get('/atividade7', [ControllerAtividade::class, 'atividade7']);

Route::get('/atividade8', [ControllerAtividade::class, 'atividade8']);

Route::get('/atividade9', [ControllerAtividade::class, 'atividade9']);

Route::get('/atividade10', [ControllerAtividade::class, 'atividade10']);

Route::get('/atividade11', [ControllerAtividade::class, 'atividade11']);

Route::get('cadastrarCliente', [Cliente::class, 'create']);
Route::post('cadastrarCliente', [Cliente::class, 'store']);
Route::get('listarCliente', [Cliente::class, 'index']);
Route::delete('deletarCliente/{id}', [Cliente::class, 'destroy']);

Route::get('cadastrarProduto', [Produto::class, 'create']);
Route::post('cadastrarProduto', [Produto::class, 'store']);