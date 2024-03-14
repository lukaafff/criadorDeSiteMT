<?php

namespace App\Http\Controllers;

use App\Models\Tenant;

class DashboardController extends Controller
{
    public function index()
    {
        $tenants = Tenant::all();

        return view('dashboard.index', compact('tenants'));
    }
}
