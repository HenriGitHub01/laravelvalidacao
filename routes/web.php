<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\InicialController@inicial')->name('site.inicial');
Route::get('/quemsomos', 'App\Http\Controllers\QuemSomosController@inicial')->name('site.quemsomos');
Route::get('/contato', 'App\Http\Controllers\ContatoController@inicial')->name('site.contato');


Route::get('/contato/{nome}/{mensagem?}', function(string $nome, string $mensagem = 'sem texto') {
 echo "Parâmetros:  . $nome - $mensagem";
});

Route::get('/admin',
 function() {
 return redirect()->route('site.inicial');
}
 );

Route::fallback(function(){
 echo 'Página não encontrada <a href= "'.route('site.inicial').'"> Clique aqui</a> ';
});
