<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UserController;


/**12 - Resource controllers - nomeando rotas*/

Route::resource('users', UserController::class)->names([
    'create'=>'usuario.criar',
    'update'=>'usuario.atualizar',
]);

