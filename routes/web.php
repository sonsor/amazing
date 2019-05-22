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

    Route::group(['prefix' => 'contact'], function() {
        Route::get('/', 'ContactController@index');
        Route::put('/', 'ContactController@save')->name('contact.save');
        Route::get('/thank-you', 'ContactController@thankyou')->name('contact.thankyou');
    });

    Route::group(['prefix' => 'downloads'], function() {
        Route::get('/', 'DownloadsController@index');
        Route::put('/', 'DownloadsController@save')->name('download.save');
        Route::get('/success', 'DownloadsController@success')->name('download.success');
        Route::get('/thank-you', 'DownloadsController@thankyou')->name('download.thankyou');
        Route::get('/error', 'DownloadsController@error')->name('download.error');
        Route::get('/file/{token}', 'DownloadsController@download')->name('download.file');
        Route::get('/{token}', 'DownloadsController@validateToken');
    });

    Route::group(['prefix' => '/icons'], function() {
        Route::get('/', 'IconController@index')->name('icon.seach');
        Route::get('/{slug}/{variation}', 'IconController@detail')->name('icon.detail');
        Route::post('/', 'IconController@search');
    });

    //Route::get('/icon/{slug}/{variation}', 'IconController@detail');

    Route::get('/categories', 'CategoryController@list');
    Route::get('/tags', 'TagController@list');
    Route::get('/variation-types', 'VariationTypeController@list');

    Route::get('/', 'PagesController@index');
    Route::get('/examples', 'PagesController@examples');
    Route::get('/faq', 'PagesController@faq');
    Route::get('/license', 'PagesController@license');
    Route::get('/privacy-policy', 'PagesController@privacyPolicy');
    Route::get('/terms-and-conditions', 'PagesController@tac');

});
