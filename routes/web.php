<?php

use Illuminate\Support\Facades\Route;

/** 7 - Validando parâmetros */


Route::get('/user/{id}',function () {
    return 'User';
})->where('id', '[0-9]+');
// saida : http://localhost:8000/user/id

Route::get('/user/{name}', function ($name) {
    return 'User '.$name;
})->where('name', '[A-Za-z]+');
// saida : http://localhost:8000/user/02


Route::get('/user/{id}/{name}', function ($id, $name) {
    return ' User ' . $id . ' - ' . $name;
})->whereNumber('id')->whereAlpha('name');
// saida : http://localhost:8000/user/02/laravel

//Ou

Route::get('/user/{id}/{name}',function ($id = null, $name = null) {
    return ' User ' . $id . ' - ' . $name;
})->where([
    'id' => '[0-9]+',
    'name' => '[a-z]+'
]);

// saida : http://localhost:8000/user/02/laravel

Route::get('/user/{id}/{name}', function ($id, $name) {
    return ' User ' . $id . ' - ' . $name;
})->whereNumber('id')->whereAlpha('name');



Route::get('/token/{token}', function ($token) {
    return $token;
})->whereAlphaNumeric('token');

//Gerador de token: https://www.uuidgenerator.net/
Route::get('/token/{token}', function ($token) {
    return $token;
})->whereUuid('token');

Route::get('/',function (){
    return view('welcome');
});

// saiida : http://localhost:8000/user/02/laravel
