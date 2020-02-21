<?php

Route::get('/admin/login', 'MainController@login');
Route::post('/admin/checklogin', 'MainController@checklogin');
Route::get('/admin/logout', 'MainController@logout');


//DASHBOARD
Route::group(['middleware' => ['auth']], function () {
    Route::get('/admin', 'MainController@index');
});


//CATEGORIES
Route::group(['middleware' => ['auth']], function () {
    Route::get('/admin/categories', 'CategoriesController@index');
    Route::get('/admin/categories/add', 'CategoriesController@create');
    Route::post('/admin/categories/store', 'CategoriesController@store');
    Route::get('/admin/categories/edit/{id}', 'CategoriesController@edit');
    Route::post('/admin/categories/update/{id}', 'CategoriesController@update');
    Route::get('/admin/categories/delete/{id}', 'CategoriesController@destroy');
});


//SUB - CATEGORIES
Route::group(['middleware' => ['auth']], function () {
    Route::get('/admin/sub-categories', 'SubCategoriesController@index');
    Route::get('/admin/sub-categories/add', 'SubCategoriesController@create');
    Route::post('/admin/sub-categories/store', 'SubCategoriesController@store');
    Route::get('/admin/sub-categories/edit/{id}', 'SubCategoriesController@edit');
    Route::post('/admin/sub-categories/update/{id}', 'SubCategoriesController@update');
    Route::get('/admin/sub-categories/delete/{id}', 'SubCategoriesController@destroy');
});


//Article
Route::group(['middleware' => ['auth']], function () {
    Route::get('/admin/article', 'ArticleController@articleIndex');
    Route::get('/admin/article/add', 'ArticleController@create');
    Route::post('/admin/article/getSubcategory', 'ArticleController@getSubcategory');
    Route::post('/admin/article/store', 'ArticleController@store');
    Route::get('/admin/article/show/{id}', 'ArticleController@show');
    
});
//Dictionary
Route::group(['middleware' => ['auth']], function () {
    Route::get('/admin/our-dictionary', 'DictionaryController@index');
    Route::get('/admin/our-dictionary/add', 'DictionaryController@create');
    Route::post('/admin/our-dictionary/store', 'DictionaryController@store');
    Route::get('/admin/our-dictionary/edit/{id}', 'DictionaryController@edit');
    Route::post('/admin/our-dictionary/update/{id}', 'DictionaryController@update');
    Route::get('/admin/our-dictionary/delete/{id}', 'DictionaryController@delete');
    
});

//Users
Route::get('/', 'UserMainController@userindex');
Route::get('/getArticlefull', 'UserMainController@getArticlefull');
