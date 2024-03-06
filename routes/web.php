<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ExternalDataController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dados', [ExternalDataController::class, 'index']);
