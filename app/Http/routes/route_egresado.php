<?php

//rutas respecto a las ofertas laborales ==================================
Route::get('/egresado/ofertas_laborales', [
    'as' => 'egresado_ofertas_laborales',
    'uses' => 'EgresadoController@ofertasLaborales'
]);

Route::get('/egresado/ofertas_laborales/resumen/{id}', [
    'as' => 'egresado_ofertas_laborales_resumen',
    'uses' => 'EgresadoController@ofertaLaboralResumen'
]);

Route::get('/egresado/ofertas_laborales/send_curriculum/{id}', [
    'as' => 'egresado_ofertas_laborales_send_curriculum',
    'uses' => 'EgresadoController@ofertaLaboralSendCurriculum'
]);

//rutas respecto a las capacitaciones ==================================

Route::get('/egresado/capacitaciones', [
    'as' => 'egresado_capacitaciones',
    'uses' => 'EgresadoController@capacitaciones'
]);

Route::get('/egresado/capacitaciones/resumen/{id}', [
    'as' => 'egresado_capacitaciones_resumen',
    'uses' => 'EgresadoController@capacitacionesResumen'
]);
Route::get('/egresado/capacitaciones/form_inscripcion/{id}', [
    'as' => 'egresado_capacitaciones_form_inscripcion',
    'uses' => 'EgresadoController@capacitacionesFormInscripcion'
]);

Route::post('/egresado/capacitaciones/register/{id}', [
    'as' => 'egresado_capacitaciones_register',
    'uses' => 'EgresadoController@capacitacionesRegister'
]);


//  SEGUIMIENTO DE EGRESADOS

Route::get('/egresado/seguimiento/situacion_laboral', [
    'as' => 'egresado_situacion_laboral',
    'uses' => 'SeguimientoController@situacionLaboral'
]);

Route::post('/egresado/seguimiento/situacion_laboral/update', [
    'as' => 'egresado_update_situacion_laboral',
    'uses' => 'SeguimientoController@updateSituacionLaboral'
]);


Route::post('/egresado/seguimiento/situacion_laboral/update', [
    'as' => 'egresado_update_situacion_laboral',
    'uses' => 'SeguimientoController@updateSituacionLaboral'
]);