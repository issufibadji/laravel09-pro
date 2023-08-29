<?php

use Illuminate\Support\Facades\Route;

/** 8 - Validando parâmetros globalmente */


Route::get('/user/{id}', function ($id) {
    return 'Hello !' .$id;
});

Route::get('/token/{token}', function ($token) {
    return $token;
});
