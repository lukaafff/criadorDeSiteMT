<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomain;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;

/*
|--------------------------------------------------------------------------
| Tenant Routes
|--------------------------------------------------------------------------
|
| Here you can register the tenant routes for your application.
| These routes are loaded by the TenantRouteServiceProvider.
|
| Feel free to customize them however you want. Good luck!
|
*/

Route::middleware([

    'web',
    InitializeTenancyByDomain::class,
    PreventAccessFromCentralDomains::class,
])->group(function () {
    Route::get('/', function () {
        return 'Esta é a aplicação multi-inquilino. O ID do inquilino atual é ' . tenant('id');
    });

    Route::get('/home', function () {
        return view('SiteCorretor.guideHome');
    })->name('home');

    Route::get('/contato', function () {
        return view('SiteCorretor.guideContato');
    })->name('contato');

    Route::get('/encomendar-imovel', function () {
        return view('SiteCorretor.guideEncomendarImovel');
    })->name('encomendar-imovel');

    Route::get('/ligamos-para-voce', function () {
        return view('SiteCorretor.guideLigamosParaVoce');
    })->name('ligamos-para-voce');

    Route::get('/sobre-nos', function () {
        return view('SiteCorretor.guideSobreNos');
    })->name('sobre-nos');

    Route::get('/cadastrar-imovel', function () {
        return view('SiteCorretor.guideCadastrarImovel');
    })->name('cadastrar-imovel');

    Route::get('/cadastrar-imovel-segunda-etapa', function () {
        return view('SiteCorretor.guideCadastrarImovelSegundaEtapa');
    })->name('cadastrar-imovel-segunda-etapa');

    Route::get('/home/anuncio', function () {
        return view('SiteCorretor.guideAnuncio');
    })->name('anuncio');
});
