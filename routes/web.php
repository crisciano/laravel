<?php

Route::get('/', function () {
    return 'crisciano .. . ';
});
// Route::get('/login', 'Auth\AuthController');

Route::get('/eventos', 'EventosController@lista');

Route::get('/eventos/mostra/{id}', 'EventosController@mostra');

Route::get('/eventos/add', 'EventosController@add');

Route::post('/eventos/adicionado', 'EventosController@adicionado');

Route::get('/eventos/excluindo/{id}', 'EventosController@excluindo');

Route::get('/eventos/json', 'EventosController@eventosJson');

// Route::get('/', 'Auth/LoginController@__construct');
// nome do controller@ nome da function

// Router::get('home', 'HomeController@index');

// Router::controllers([
// 	'auth' => 'Auth\AuthController',
// 	'password' => 'Auth\PasswordController'
// ]);