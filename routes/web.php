<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ExternalDataController;

use App\Http\Controllers\ConexaoExternaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dados', [ExternalDataController::class, 'index']);

Route::get('/usuarios', [ConexaoExternaController::class, 'index'])->name('usuarios.index');
Route::get('/usuarios/{id}', [ConexaoExternaController::class, 'show'])->name('usuarios.show');
