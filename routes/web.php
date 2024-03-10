<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DomainController;
use App\Http\Controllers\ConexaoExternaController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/usuarios', [ConexaoExternaController::class, 'index'])->name('usuarios.index');
Route::get('/usuarios/{id}', [ConexaoExternaController::class, 'show'])->name('usuarios.show');

Route::post('/criar-dominio', [DomainController::class, 'criarDominio'])->name('dominio.criar');

