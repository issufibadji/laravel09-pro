<?php

use Illuminate\Support\Facades\Route;

/** 6-Rotas com parâmetros */


Route::get('/user/{id?}',function () {
    return 'User';
});
// saida : http://localhost:8000/user/id

Route::get('/user/{id}', function ($id) {
    return 'User '.$id;
});
// saida : http://localhost:8000/user/02


Route::get('/user/{id}/{name}',function ($id = null, $name = null) {
    return ' User ' . $id . ' - ' . $name;
});
// saida : http://localhost:8000/user/02/laravel

Route::get('/',function (){
    return view('welcome');
});

// saiida : http://localhost:8000/user/02/laravel

