<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerAtividade;
use App\Http\Controllers\Cliente;
use App\Http\Controllers\Produto;

Route::get('/', function () {
    return redirect()->route('register');
});


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

Route::get('cadastrarCliente', [Cliente::class, 'create'])->middleware(['auth'])->name('cadastrarCliente');
Route::post('cadastrarCliente', [Cliente::class, 'store'])->middleware(['auth']);
Route::get('listarCliente', [Cliente::class, 'index'])->middleware(['auth'])->name('listarCliente');
Route::delete('deletarCliente/{id}', [Cliente::class, 'destroy'])->middleware(['auth']);
Route::get('editarCliente/{id}', [Cliente::class, 'edit'])->middleware(['auth']);
Route::put('/atualizarCliente/{id}', [Cliente::class, 'update'])->middleware(['auth']);


Route::get('cadastrarProduto', [Produto::class, 'create'])->middleware(['auth'])->name('cadastrarProduto');
Route::post('cadastrarProduto', [Produto::class, 'store'])->middleware(['auth']);
Route::get('listarProduto', [Produto::class, 'index'])->middleware(['auth'])->name('listarProduto');
Route::delete('deletarProduto/{id}', [Produto::class, 'destroy'])->middleware(['auth']);
Route::get('editarProduto/{id}', [Produto::class, 'edit'])->middleware(['auth']);
Route::put('/atualizarProduto/{id}', [Produto::class, 'update'])->middleware(['auth']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
