<?php

use Illuminate\Support\Facades\Route;

/**11 - Agrupando rotas com subdominio*/

Route::domain('{user}.example.com')->group(function () {

    Route::get('/user/{id}/{name}',function ($id = null, $name = null) {
        return ' User ' . $id . ' - ' . $name;
    });

    Route::get('/user/{id}', function ($id) {
        return 'User '.$id;
    });
});



