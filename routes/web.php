<?php

use Illuminate\Support\Facades\Route;

/** criar route usando view direto em vez de get*/
//direcionar view diretamente da rota

Route::view('/welcome','welcome',[
    'title'=>'Hello World'
]);

Route::get('/',function (){
    return view('welcome');
});

