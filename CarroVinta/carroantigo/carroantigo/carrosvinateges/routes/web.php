<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\produtosController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/exemplo', function () {
    return view('formulario');
})->name('exemplo');


Route::get('/seila', [ProfileController::class, 'carros'])->name('carros');

Route::get('/Produto', [produtosController::class, 'formulario'])->name('formulario');

Route::get('/produto_visualizar/{id}', [produtosController::class, 'visualiza_produto']);

Route::post('/deleta_produto', [produtosController::class, 'deleta'])->name('apaga_produto');

Route::post('/salva_produto', [produtosController::class, 'salva_produto'])->name('salva_produto');

Route::post('/cadastar_produto', [produtosController::class, 'salva_produto'])->name('produto.salva');

Route::get('/produto_deletar/{id}', [produtosController::class, 'produto_deletar']);

Route::get('/produto_alterar/{id}', [produtosController::class, 'produto_alterar']); 

Route::post('/muda_produto',[produtosController::class,'muda_produto'])->name('alterar_produto');

Route::get('/ver_produtos',[produtosController::class, 'ver_produtos'])->name('ver_produtos');
