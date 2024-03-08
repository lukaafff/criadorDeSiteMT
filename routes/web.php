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


Route::post('/receber-dados', function () {
    $userId = request()->input('user_id');
    //Log::info('ID do usuário recebido no microserviço: ' . $userId);

    return view('mostrar-dados', ['user_id' => $userId]);
});
