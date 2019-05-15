<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(['prefix' => '/'], function() {
    Route::get('/', 'PagesController@index');
    Route::get('/examples', 'PagesController@examples');
    Route::get('/contact', 'PagesController@contact');
    Route::get('/contact', 'PagesController@contact');

    Route::group(['prefix' => '/icons'], function() {
        Route::get('/', 'IconController@index');
        Route::post('/', 'IconController@search');
    });

});
