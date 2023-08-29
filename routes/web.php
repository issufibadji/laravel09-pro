<?php

use Illuminate\Support\Facades\Route;

// 1 - Criando rotas
Route::get( 'users',function(){
    return 'Listar Tds!!';
});

Route::post('users/id', function (){
    return"criado";
});
Route::delete('users/id',function (){
    return'Apagado!';
});
Route::put('users/id',function (){
    return'Atualizado';
});
Route::patch('users',function(){
    return 'Editado!';
});
Route::options('users',function (){
    return 'Option!';
});
