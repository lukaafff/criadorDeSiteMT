<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tenant;
use App\Models\ConexaoExterna;

class TenantController extends Controller
{
    public function createTenant(Request $request)
    {
        $userId = $request->input('user_id');
        $tenantId = $request->input('tenant_id');
        $domain = $request->input('domain');

        $user = $this->buscarUsuario($userId);

        if ($user) {
            $nivelUsuario = $user->level;
            $assinatura = $this->buscarAssinatura($userId);

            if ($this->podeCriarTenant($nivelUsuario, $assinatura)) {
                $tenant = Tenant::create([
                    'tenant_id' => $tenantId,
                    'domain' => $domain,
                    'user_ig' => $userId,
                ]);

                $tenant->domains()->create([
                    'domain' => $domain,
                ]);

            } else {
                return view('mostrar-dados', ['user_id' => $userId, 'message' => 'Usuário não atende aos requisitos para criar inquilino e domínio.']);
            }
        } else {
            return view('mostrar-dados', ['user_id' => $userId, 'message' => 'Usuário não encontrado.']);
        }
    }

    private function buscarUsuario($userId)
    {
        $userModel = new ConexaoExterna();
        $userModel->setTable('users');
        return $userModel->find($userId);
    }

    private function buscarAssinatura($userId)
    {
        $assinaturaModel = new ConexaoExterna();
        $assinaturaModel->setTable('assinaturas_asaas');
        return $assinaturaModel->where('user_id', $userId)->first();
    }

    private function podeCriarTenant($nivelUsuario, $assinatura)
    {
        return ($nivelUsuario >= 8) || ($assinatura && $assinatura->status == 1);
    }
}
