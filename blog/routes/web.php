<?php

Route::get('/login', 'MainController@login');
Route::post('/checklogin', 'MainController@checklogin');
Route::get('/logout', 'MainController@logout');


//DASHBOARD
Route::group(['middleware' => ['auth']], function () {
    Route::get('/', 'MainController@index');
});