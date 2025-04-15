<?php

use App\Http\Controllers\FrotaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index_frota', [FrotaController::class, 'index']);
Route::resource('usuario', UsuarioController::class);

Route::get('/testandoGrafico', [FrotaController::class, 'index_grafico']);
require __DIR__.'/auth.php';
