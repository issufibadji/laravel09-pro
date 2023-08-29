<?php

use Illuminate\Support\Facades\Route;

/**12 - fallback*/


Route::get('/user/{id}', function ($id) {
    return 'User '.$id;
});

//entra em acção quando nenuma dadas rotas não foram encontrada

Route::fallback(function () {
    return 'Alternativa rota!';
});
