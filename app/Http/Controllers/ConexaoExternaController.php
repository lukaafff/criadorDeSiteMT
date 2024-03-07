<?php

namespace App\Http\Controllers;

use App\Models\ConexaoExterna;
use Illuminate\Http\Request;

class ConexaoExternaController extends Controller
{
    public function index()
    {
        $usuarios = ConexaoExterna::select('name', 'level')->get();
        return view('info2', ['usuarios' => $usuarios]);
    }

    public function show($id)
    {
        $usuario = ConexaoExterna::select('name', 'level')->find($id);
        return view('info2', ['usuario' => $usuario]);
    }
}
