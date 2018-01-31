<?php

Route::get('/login', 'Auth\AuthController@getLogin');
Route::post('/login', 'Auth\AuthController@postLogin');
Route::get('/logout', 'Auth\AuthController@getLogout');

Route::group(['prefix' => '/'], function () {


    Route::get('/inicio', [
        'as' => 'app_inicio',
        'uses' => 'AppController@index'
    ]);

    require_once app_path() .'/Http/routes/route_admin.php';
    

});