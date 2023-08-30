<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UserController;

/**2 - Controllers com parâmetros*/

Route::get('/users', [UserController::class, 'index']); //no lugara da function (primeiro item é nome Class e segundo nome metodo no controle)
Route::get('/user/{id}', [UserController::class, 'show']);


Route::fallback(function () {
    return 'Alternativa rota!';
});
