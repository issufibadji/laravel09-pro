<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UserController;


/**13 - Resource controllers - renomeando parâmetros*/

Route::resource('users', UserController::class)->parameters([
    'users' => 'admin_user'
]);

///users/{admin_user}

Route::resource('users.commets', UserController::class)->parameters([
    'users' => 'admin_user',
    'comments' => 'admin_comment',
    ]);

