<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UserController;


/**11-Resource controllers - aninhando rotas*/

//users/{user}/comments/
//users/{user}/comments/{comment} usa quando vc precisa de passar id do user

Route::resource('users.commets', UserController::class);
//comments/{comment} não precisa de id user
Route::resource('users.commets', UserController::class)->shallow();
