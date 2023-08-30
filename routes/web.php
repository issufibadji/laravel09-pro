<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UserController;

/**3 - Injeção de dependência*/

Route::get('/users', [UserController::class, 'index']);

Route::get('/user/{id}', [UserController::class, 'show']);


Route::fallback(function () {
    return 'Alternativa rota!';
});
