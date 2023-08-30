<?php

use Illuminate\Support\Facades\Route;

/**13-Injeção de dependência e parâmetros de rota*/

Route::get('/user/{user}', function (\App\Models\User $user){

    dd($user); //digite na url: //http://127.0.0.1:8000/user/1

});

Route::fallback(function () {
    return 'Alternativa rota!';
});
