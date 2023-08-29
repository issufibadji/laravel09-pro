<?php

use Illuminate\Support\Facades\Route;

/*rota nomeadas!*/

Route::get('users', function() {
    return 'rota nomeadas!';

})->name('users');

/* ->name('usuarios');*/
