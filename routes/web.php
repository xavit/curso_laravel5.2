<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

//Parametro Requerido
Route::get('/agenda/{name}/apellido/{lastname}', 'PersonaController@index');
//Parametro Opcional
Route::get('user/{name?}', function ($name = null) {
    return $name;
});

Route::get('/', 'PersonaController@index');
Route::get('/personas/formulario', 'PersonaForm@index');
Route::get('/personas/{id}', 'PersonaForm@destroy');
Route::post('/personas/guardar', 'PersonaForm@store');
