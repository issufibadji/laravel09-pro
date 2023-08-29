<?php

use Illuminate\Support\Facades\Route;

/**9-Agrupando rotas usando prefixo */



//Prefixos de rota

Route::prefix('user')->group(function () {
    Route::get('/', function () {
        return 'Hello!';
    }); // Matches The "/admin/users" URL


    Route::get('{id}', function ($id) {
        return 'Hello !' .$id;
    });
});

//Prefixos de nome de rota
Route::name('admin')->group(function () {
    Route::get('/', function () {
        return 'Hello!';
    })->name('users'); // Matches The "/admin/users" URL


    Route::get('/{id}', function ($id) {
        return 'Hello !' .$id;
    })->name('user');
});



