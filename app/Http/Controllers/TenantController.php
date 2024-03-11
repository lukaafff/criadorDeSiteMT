<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tenant;
use App\Models\Domain;

class TenantController extends Controller
{
    public function createTenant(Request $request)
    {
        $tenant = Tenant::create(['tenant_id' => $request->input('tenant_id')]);

        $domain = $tenant->domains()->create(['domain' => $request->input('domain')]);

        return redirect()->route('tenant.home');
    }
}
