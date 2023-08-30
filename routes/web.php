<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UserController;

/**4 - Injetando model no controller*/

Route::get('/users', [UserController::class, 'index']);

Route::get('/users/{user}', [UserController::class, 'show']);


Route::fallback(function () {
    return 'Alternativa rota!';
});
