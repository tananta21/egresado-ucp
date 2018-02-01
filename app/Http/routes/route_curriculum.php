<?php
//DATOS PERSONALES
Route::get('/curriculum/datos/personales', [
    'as' => 'datos_personales',
    'uses' => 'CurriculumController@datosPersonales'
]);


//EXPERIENCIA LABORAL
Route::get('/curriculum/experiencia/laboral', [
    'as' => 'experiencia_laboral',
    'uses' => 'CurriculumController@listaExperiencia'
]);




