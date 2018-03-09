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

//MANTENIMIENTO DE ADMINISTRACION : PERFIL ADMINISTRADOR

Route::get('/admin/inicio', [
    'as' => 'admin_inicio',
    'uses' => 'AdministracionController@index'
]);

//OFERTA LABORAL
Route::get('/admin/oferta_laboral/list', [
    'as' => 'admin_oferta_laboral_list',
    'uses' => 'AdministracionController@ofertaLaboralList'
]);
Route::post('/admin/oferta_laboral/create', [
    'as' => 'admin_oferta_laboral_create',
    'uses' => 'AdministracionController@ofertaLaboralCreate'
]);

//requisitos oferta laboral
Route::get('/admin/oferta_laboral/requisito/{id}', [
    'as' => 'admin_oferta_laboral_requisito',
    'uses' => 'AdministracionController@ofertaLaboralRequisito'
]);

//updates requisitos oferta laboral
Route::post('/admin/oferta_laboral/requisito/update/{id}', [
    'as' => 'admin_oferta_laboral_requisito_update',
    'uses' => 'AdministracionController@ofertaLaboralRequisitoUpdate'
]);


// oferta carreras afines
Route::post('/admin/oferta_laboral/carrera/create/{id}', [
    'as' => 'admin_oferta_laboral_carrera_create',
    'uses' => 'AdministracionController@ofertaLaboralCarreraCreate'
]);

// oferta programas requeridos
Route::post('/admin/oferta_laboral/programa/create/{id}', [
    'as' => 'admin_oferta_laboral_programa_create',
    'uses' => 'AdministracionController@ofertaLaboralProgramaCreate'
]);

// Resumen oferta laboral
Route::get('/admin/oferta_laboral/resumen/{id}', [
    'as' => 'admin_oferta_laboral_resumen',
    'uses' => 'AdministracionController@ofertaLaboralResumen'
]);

// Postulantes oferta laboral
Route::get('/admin/oferta_laboral/postulantes/{id}', [
    'as' => 'admin_oferta_laboral_postulantes',
    'uses' => 'AdministracionController@ofertaLaboralPostulantes'
]);





