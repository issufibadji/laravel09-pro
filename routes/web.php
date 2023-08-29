<?php

use Illuminate\Support\Facades\Route;

/*Multiplos verbos Http -> com uma unica função*/

Route::match(['get','post'], 'users', function() {
    return 'Multiplos verbos Http !';

});

//ou

Route::any('/', function () {
    return 'Multiplos verbos Http !';
});
