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


//EXPERIENCIA LABORAL
Route::get('/curriculum/experiencia/laboral', [
    'as' => 'experiencia_laboral',
    'uses' => 'CurriculumController@listaExperiencia'
]);




