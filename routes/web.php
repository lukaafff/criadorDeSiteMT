<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TenantController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/tenantcreate', [TenantController::class, 'createTenant'])->name('tenant.create');
