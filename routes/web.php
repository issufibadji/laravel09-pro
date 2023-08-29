<?php

use Illuminate\Support\Facades\Route;

/** é muito interessante para motor de busca  */
//Route::redirect('rota-a','rota-b', status:301); //com estatus
//Route::permanentRedirect('rota-a','rota-b');

Route::get('rota-d',function(){

    //Logica Cabulosa
    return redirect()->route('usuarios'); //return redirect('rota-b');
});


Route::get('rota-b', function(){
    return'ROTA B';
})->name('rotab');

Route::get('users', function() {
    return 'rota nomeadas!';

})->name('usuarios');

//Redirect::route();
