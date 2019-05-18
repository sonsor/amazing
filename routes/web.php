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
    Route::get('/faq', 'PagesController@faq');
    Route::get('/license', 'PagesController@license');
    Route::get('/privacy-policy', 'PagesController@privacyPolicy');
    Route::get('/terms-and-conditions', 'PagesController@tac');

    Route::group(['prefix' => '/icons'], function() {
        Route::get('/', 'IconController@index');
        Route::get('/{slug}/{variation}', 'IconController@show');
        Route::post('/', 'IconController@search');
    });

    Route::get('/categories', 'CategoryController@list');
    Route::get('/tags', 'TagController@list');
    Route::get('/variation-types', 'VariationTypeController@list');

});
