<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\EstoqueController;
use App\Http\Controllers\PedidoController;

Route::get('/', function () {
    return view('welcome');
});

// --- Módulos do Sistema ---

// Fornecedores
Route::resource('fornecedores', FornecedorController::class);

// Estoque
Route::resource('estoque', EstoqueController::class);

// Pedidos
Route::resource('pedidos', PedidoController::class);

// Clientes (Se você quiser todas as funções de criar/editar, use resource também)
Route::resource('clientes', ClienteController::class);

// --- Dashboard e Autenticação (Breeze) ---

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';