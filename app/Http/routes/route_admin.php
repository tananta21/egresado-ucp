<?php

Route::get('/egresados', [
    'as' => 'lista_egresados',
    'uses' => 'EgresadoController@index'
]);
Route::get('/egresados/nuevo', [
    'as' => 'nuevo_egresado',
    'uses' => 'EgresadoController@nuevoEgresado'
]);

Route::post('/egresados/crear', [
    'as' => 'crear_egresado',
    'uses' => 'EgresadoController@crearEgresado'
]);

