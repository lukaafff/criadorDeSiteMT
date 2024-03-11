<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DomainController;
use App\Http\Controllers\ConexaoExternaController;
use App\Http\Controllers\TenantController;

Route::get('/', function () {
    return view('welcome');
});

/* Route::get('/usuarios', [ConexaoExternaController::class, 'index'])->name('usuarios.index');
Route::get('/usuarios/{id}', [ConexaoExternaController::class, 'show'])->name('usuarios.show'); */

Route::post('/criar-dominio', [DomainController::class, 'criarDominio'])->name('dominio.criar');

Route::post('/tenant/create', [TenantController::class, 'createTenant'])->name('tenant.create');
