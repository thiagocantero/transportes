<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EtapaController;
use App\Http\Controllers\FreteController;
use Illuminate\Support\Facades\Route;

Route::get('/teste', function () {
    return "Teste API";
});

Route::post('/clientes', [ClienteController::class, 'store']);
Route::post('/fretes', [FreteController::class, 'store']);
Route::post('/etapas', [EtapaController::class, 'store']);
