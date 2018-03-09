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


//IDIOMAS ==============================================================

Route::get('/curriculum/idiomas', [
    'as' => 'egresado_idioma',
    'uses' => 'CurriculumController@listaIdiomas'
]);

Route::post('/curriculum/idiomas/create', [
    'as' => 'egresado_idioma_create',
    'uses' => 'CurriculumController@createIdioma'
]);

Route::get('/curriculum/idiomas/delete/{id}', [
    'as' => 'egresado_idioma_delete',
    'uses' => 'CurriculumController@deleteIdioma'
]);


//PROGRAMAS ==============================================================

Route::get('/curriculum/programas', [
    'as' => 'egresado_programa',
    'uses' => 'CurriculumController@listaProgramas'
]);

Route::post('/curriculum/programas/create', [
    'as' => 'egresado_programa_create',
    'uses' => 'CurriculumController@createPrograma'
]);

Route::get('/curriculum/programa/delete/{id}', [
    'as' => 'egresado_programa_delete',
    'uses' => 'CurriculumController@deleteDetallePrograma'
]);

//REFERENCIAS ==============================================================

Route::get('/curriculum/referencias', [
    'as' => 'egresado_referencia',
    'uses' => 'CurriculumController@listaReferencias'
]);

Route::post('/curriculum/referencias/create', [
    'as' => 'egresado_referencia_create',
    'uses' => 'CurriculumController@createReferencia'
]);

Route::get('/curriculum/referencias/editar/{slug}/{id}', [
    'as' => 'egresado_referencia_editar',
    'uses' => 'CurriculumController@editarReferencia'
]);








