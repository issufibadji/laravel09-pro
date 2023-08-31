<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UserController;


/**6 - Controller de ação única*/

Route::resource('/users', UserController::class);

