<?php
//DATOS PERSONALES
Route::get('/curriculum/datos/personales', [
    'as' => 'datos_personales',
    'uses' => 'CurriculumController@datosPersonales'
]);

Route::post('/curriculum/datos/personales/update', [
    'as' => 'update_datos_personales',
    'uses' => 'CurriculumController@updateDatosPersonales'
]);


//EXPERIENCIA LABORAL =========================

Route::get('/curriculum/experiencia/laboral', [
    'as' => 'experiencia_laboral',
    'uses' => 'CurriculumController@listaExperiencia'
]);

Route::get('/curriculum/experiencia/laboral/nuevo', [
    'as' => 'experiencia_laboral_nuevo',
    'uses' => 'CurriculumController@nuevaExperiencia'
]);

Route::post('/curriculum/experiencia/laboral/create', [
    'as' => 'experiencia_laboral_create',
    'uses' => 'CurriculumController@createExperiencia'
]);

// ESTUDIOS ========================================

Route::get('/curriculum/estudios', [
    'as' => 'egresado_estudio',
    'uses' => 'CurriculumController@listaEstudio'
]);

Route::get('/curriculum/estudios/nuevo', [
    'as' => 'egresado_estudio_nuevo',
    'uses' => 'CurriculumController@nuevoEstudio'
]);

Route::post('/curriculum/estudios/create', [
    'as' => 'egresado_estudio_create',
    'uses' => 'CurriculumController@createEstudio'
]);





