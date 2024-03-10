<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ConexaoExterna;

class DomainController extends Controller
{
    public function criarDominio(Request $request)
    {
        $userId = $request->input('user_id');
        $user = $this->buscarUsuario($userId);

        if ($user) {
            $nivelUsuario = $user->level;

            $assinatura = $this->buscarAssinatura($userId);

            if ($this->podeCriarDominio($nivelUsuario, $assinatura)) {
                return view('mostrar-dados', ['user_id' => $userId, 'nivelUsuario' => $nivelUsuario, 'assinatura' => $assinatura]);
            } else {
                return view('mostrar-dados', ['user_id' => $userId, 'message' => 'Usuário não atende aos requisitos para criar domínio.']);
            }
        } else {
            return view('mostrar-dados', ['user_id' => $userId, 'message' => 'Usuário não encontrado.']);
        }
    }

    private function buscarUsuario($userId) {
        $userModel = new ConexaoExterna();
        $userModel->setTable('users');
        return $userModel->find($userId);
    }

    private function buscarAssinatura($userId) {
        $assinaturaModel = new ConexaoExterna();
        $assinaturaModel->setTable('assinaturas_asaas');
        return $assinaturaModel->where('user_id', $userId)->first();
    }

    private function podeCriarDominio($nivelUsuario, $assinatura) {
        return ($nivelUsuario >= 8) || ($assinatura && $assinatura->status == 1);
    }
}
