<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UserController;


/**8 - Resource controllers - definindo métodos na rota*/

Route::resource('/users', UserController::class)->only([
    'index', 'show'
]);

Route::resource('/users', UserController::class)->except([
    'create', 'store', 'update', 'destroy'
]);
