<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UserController;

/**01-Criar Controller e conetar com a rota*/

Route::get('/users', [UserController::class, 'index']); //no lugara da function (primeiro item é nome Class e segundo nome metodo no controle)

Route::fallback(function () {
    return 'Alternativa rota!';
});
