<?php

use Illuminate\Support\Facades\Route;

/**10 - Agrupando rotas com middleware */

Route::middleware('signed')->group(function () {
    Route::get('user', function () {
        return 'Hello!';
    })->name('users'); // Matches The "/admin/users" URL


    Route::get('user/{id}', function ($id) {
        return 'Hello !' .$id;
    })->name('user');
});


Route::get('/profile', function () {
    return 'Hello!';
})->middleware('auth');



