<?php

//rutas respecto a las ofertas laborales
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




