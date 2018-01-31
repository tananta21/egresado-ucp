<?php

Route::get('/egresados', [
    'as' => 'lista_egresados',
    'uses' => 'EgresadoController@index'
]);
Route::get('/egresados/nuevo', [
    'as' => 'nuevo_egresado',
    'uses' => 'EgresadoController@nuevoEgresado'
]);
