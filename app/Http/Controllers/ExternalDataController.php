<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ExternalDataController extends Controller
{
    public function index()
    {
        $externalData = DB::connection('main_database')
            ->table('assinaturas_asaas')
            ->select('status')
            ->get();

        $userData = DB::connection('main_database')
            ->table('users')
            ->select('id', 'name', 'level')
            ->where('level', '>=', 3)
            ->get();

        return view('info', [
            'externalData' => $externalData,
            'userData' => $userData,
        ]);
    }
}
