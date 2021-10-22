<?php

Route::get('/', function () {
    return view('auth.login');
});

Route::post('logar', 'Auth\LoginController@authenticate');

Auth::routes(['register' => false]);

//Rotas para Utilizador e Pessoa
Route::middleware(['auth'])->group(function () { 
    Route::get('dashboard', function () {
        return view('layouts.dashboard');
    });
    Route::get('registarUtilizador', function () {
        return view('pages.registoUtilizador');
    });
    Route::post('registarUtilizador', 'UtilizadorController@registarUtilizador');
    Route::get('listarUtilizadores', 'UtilizadorController@getUsers');
    Route::get('modificarEstado/{id_user}/{estado}', 'UtilizadorController@modificarEstado');
    Route::get('verPerfil', 'UtilizadorController@verPerfil');
    Route::post('trocarSenha', 'UtilizadorController@trocarSenha');
});

//Rotas para Pessoal(Delegado,Serviço e Imprensa)
Route::middleware(['auth'])->group(function () { 
    Route::get('registarPessoal', function () {
        return view('pessoal.registarPessoal');
    });
    Route::post('registarPessoa','PessoaController@registarPessoa');

    Route::get('listarDelegado', function () {
        return view('pessoal.listarDelegado');
    });
    Route::get('listarImprensa', function () {
        return view('pessoal.listarImprensa');
    });
    Route::get('listarServico', function () {
        return view('pessoal.listarServico');
    });
    Route::get('getPessoas/{tipo}','PessoaController@listarPessoas');
    Route::get('gerarPasse/{id_pessoa}','PessoaController@gerarPasse');
    
    Route::get('contadorEstatistica','PessoaController@contadorEstatistica');
});

//Rotas para Pessoal(Delegado,Serviço e Imprensa)
Route::middleware(['auth'])->group(function () { 
    Route::get('marcarPresenca',function(){
        return view('pages.marcarPresenca');
    });
    Route::post('pesquisarPessoa','PessoaController@pesquisarPessoa');
    Route::post('marcarPresenca','PessoaController@marcarPresenca');
});


