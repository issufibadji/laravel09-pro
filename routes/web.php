<?php

use App\Http\Controllers\CheckoutController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UserController;


/**6 - Controller de ação única*/

Route::get('/users', [UserController::class, 'index']);

Route::get('/users/{user}', [UserController::class, 'show']);

Route::get('/checkout/{token}', CheckoutController::class);
//
//Route::fallback(function () {
//    return 'Alternativa rota!';
//});
