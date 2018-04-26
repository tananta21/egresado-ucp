<?php

Route::get('/report/inicio', [
    'as' => 'report_inicio',
    'uses' => 'ReportController@index'
]);

Route::get('/report/situacion_laboral', [
    'as' => 'report_situacion_laboral',
    'uses' => 'ReportController@situacionLaboral'
]);
// api situacion laboral
Route::get('/api/report/situacion_laboral', [
    'as' => 'api_report_situacion_laboral',
    'uses' => 'ReportController@apiSituacionLaboral'
]);