<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UserController;

/**5 - Aplicando middleware*/

Route::get('/users', [UserController::class, 'index']);

Route::get('/users/{user}', [UserController::class, 'show']);


Route::fallback(function () {
    return 'Alternativa rota!';
});
