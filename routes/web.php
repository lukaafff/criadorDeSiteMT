<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TenantController;
use App\Http\Controllers\DashboardController;

Route::get('/', [DashboardController::class, 'index']);

Route::post('/tenantcreate', [TenantController::class, 'createTenant'])->name('tenant.create');
