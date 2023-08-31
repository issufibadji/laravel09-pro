<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UserController;


/**9 - Resource controllers - múltiplos resources*/

Route::resources([
    'users', UserController::class,
    'posts', UserController::class,

]);
