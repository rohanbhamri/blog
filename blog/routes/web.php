<?php

Route::get('/login', 'MainController@login');
Route::post('/checklogin', 'MainController@checklogin');
Route::get('/logout', 'MainController@logout');


//DASHBOARD
Route::group(['middleware' => ['auth']], function () {
    Route::get('/', 'MainController@index');
});


//CATEGORIES
Route::group(['middleware' => ['auth']], function () {
    Route::get('/categories', 'CategoriesController@index');
    Route::get('/categories/add', 'CategoriesController@create');
    Route::post('/categories/store', 'CategoriesController@store');
    Route::get('/categories/edit/{id}', 'CategoriesController@edit');
    Route::post('/categories/update/{id}', 'CategoriesController@update');
    Route::get('/categories/delete/{id}', 'CategoriesController@destroy');
});