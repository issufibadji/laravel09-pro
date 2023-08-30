<?php

use Illuminate\Support\Facades\Route;

/**13-Injeção de dependência e parâmetros de rota*/

Route::get('/', function ( \Illuminate\Http\Request $request){
    //dump();
    //die();
    //dd($request);//informação de request
    //dd($request->method());//info metodos
    //dd($request->header('host'));//info header
    dd($request->query('curso')); //digite na url: //http://127.0.0.1:8000/?curso=laravel

    return$request;
});

//entra em acção quando nenuma dadas rotas não foram encontrada

Route::fallback(function () {
    return 'Alternativa rota!';
});
