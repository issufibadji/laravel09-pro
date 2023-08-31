<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UserController;


/**9 - Resource controllers - múltiplos resources*/
Route::resource('/users', UserController::class)->except(['create', 'edit']);

Route::apiResource('users',UserController::class);//é igual a except(['create', 'edit']);

Route::apiResources([
    'users', UserController::class,
    'posts', UserController::class,
]);
