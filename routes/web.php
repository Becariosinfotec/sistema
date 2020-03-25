<?php

Route::get('/', function () {
    return view('auth.login');

});
/**
 * Mostrar Registro de computadoras
 */
Route::get('/computadoras', 'EmpleadosController@index');

//Route::get('/computadoras/create', 'ComputadoraController@create');


Route::resource('computadoras', 'ComputadoraController');
Auth::routes(['register'=>false, 'reset'=>false]);

Route::get('/home', 'HomeController@index')->name('home');
