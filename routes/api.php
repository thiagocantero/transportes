<?php

use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;

Route::get('/teste', function () {
    return "Teste API";
});

Route::post('/clientes', [ClienteController::class, 'store']);
