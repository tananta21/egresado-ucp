<?php

Route::get('/report/inicio', [
    'as' => 'report_inicio',
    'uses' => 'ReportController@index'
]);

Route::get('/report/situacion_laboral', [
    'as' => 'report_situacion_laboral',
    'uses' => 'ReportController@situacionLaboral'
]);

Route::get('/report/sector_trabajo', [
    'as' => 'report_sector_trabajo',
    'uses' => 'ReportController@sectorTrabajo'
]);

Route::get('/report/grado_satisfaccion', [
    'as' => 'report_grado_satisfaccion',
    'uses' => 'ReportController@gradoSatisfaccion'
]);
// APIS PARA GENERAR LOS GRAFICOS =============================================
Route::get('/api/report/situacion_laboral', [
    'as' => 'api_report_situacion_laboral',
    'uses' => 'ReportController@apiSituacionLaboral'
]);
Route::get('/api/report/sector_trabajo', [
    'as' => 'api_report_sector_trabajo',
    'uses' => 'ReportController@apiSectorTrabajo'
]);