<?php

Route::get('login/entry', 'Auth\AuthController@getLogin');
Route::post('login/form', 'Auth\AuthController@postLogin');
Route::get('logout/', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register/form', 'Auth\AuthController@postRegister');



Route::group(['prefix' => '/', 'middleware' => 'auth'], function () {

    Route::get('/', [
        'as' => 'app_inicio',
        'uses' => 'AppController@index'
    ]);

//    Route::get('/inicio', [
//        'as' => 'app_inicio',
//        'uses' => 'AppController@index'
//    ]);


    require_once app_path() .'/Http/routes/route_admin.php';
    require_once app_path() .'/Http/routes/route_alumno.php';
    require_once app_path() .'/Http/routes/route_curriculum.php';


});