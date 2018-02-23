<?php

Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
Route::get('/eventos', 'EventosController@lista');
Route::get('/eventos/mostra/{id}', 'EventosController@mostra');
Route::get('/eventos/add', 'EventosController@add');
Route::post('/eventos/adicionado', 'EventosController@adicionado');
Route::get('/eventos/excluindo/{id}', 'EventosController@excluindo');
Route::get('/eventos/json', 'EventosController@eventosJson');