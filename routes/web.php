<?php

use Illuminate\Support\Facades\Route;

// ROTA DA PÁGINA INICIAL DA APLICAÇÃO (HOME)
Route::get('/', function () {
    return view('home');
})->name('home');

// ROTA PARA QUE LEVA PARA A PÁGINA DE CRIAR CONTA
Route::get('/criar-conta', function () {
    return view('create-account');
})->name('create-account');

// ROTA A DEFINIR APÓS O USUÁRIO ENVIAR A REQUISIÇÃO APÓS CRIAR A CONTA
Route::post('/criar-conta', function () {
    return 'VALIDAÇÃO E INSERÇÃO DE USUÁRIO';
})->name('insert-account');



// ROTA QUE LEVA PARA A PÁGINA DE LOGIN
Route::get('/login', function () {
    return view('login');
})->name('login');

// ROTA PARA AUTENTICAR O LOGIN
Route::post('/login', function () {
    return 'AUTENTICAÇÃO DO USUÁRIO';
})->name('auth');

Route::get('/esqueceu-senha', function () {
    // return view('login');
})->name('forgot-password');

