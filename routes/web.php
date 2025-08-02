<?php

use Illuminate\Support\Facades\Route;

// ROTA DA PÁGINA INICIAL DA APLICAÇÃO (HOME)
Route::get('/', function () {
    return view('home');
})->name('home');

// ==========================================================================

// ROTA PARA QUE LEVA PARA A PÁGINA DE CRIAR CONTA
Route::get('/create-account', function () {
    return view('create-account');
})->name('create-account');

// ==========================================================================

// ROTA A DEFINIR APÓS O USUÁRIO ENVIAR A REQUISIÇÃO APÓS CRIAR A CONTA
Route::post('/create-account', function () {
    return 'VALIDAÇÃO E INSERÇÃO DE USUÁRIO';
})->name('insert-account');

// ==========================================================================

// ROTA QUE LEVA PARA A PÁGINA DE LOGIN
Route::get('/login', function () {
    // return view('login');
})->name('login');

