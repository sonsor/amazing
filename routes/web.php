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


Route::group(['prefix' => 'admin'], function () {
    Auth::routes();

    Route::group(['middleware' => 'auth'], function () {

        Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('admin.logout');
        Route::get('/dashboard', 'Admin\\DashboardController@index')->name('admin.dashboard');
        Route::group(['prefix' => 'category'], function () {
            Route::get('/', 'Admin\\CategoryController@list')->name('admin.category.list');
            Route::get('/new', 'Admin\\CategoryController@edit')->name('admin.category.create');
            Route::get('/{id}', 'Admin\\CategoryController@edit')->name('admin.category.edit');

            Route::put('/new', 'Admin\\CategoryController@store');
            Route::put('/{id}', 'Admin\\CategoryController@store')->name('admin.category.update');

            Route::delete('/{id}', 'Admin\\CategoryController@remove')->name('admin.category.remove');
        });

        Route::group(['prefix' => 'tag'], function () {
            Route::get('/', 'Admin\\TagController@list')->name('admin.tag.list');

            Route::get('/new', 'Admin\\TagController@edit')->name('admin.tag.create');
            Route::get('/{id}', 'Admin\\TagController@edit')->name('admin.tag.edit');

            Route::put('/new', 'Admin\\TagController@store');
            Route::put('/{id}', 'Admin\\TagController@store')->name('admin.tag.update');


            Route::delete('/{id}', 'Admin\\TagController@remove')->name('admin.tag.remove');
        });

        Route::group(['prefix' => 'variation-type'], function() {
            Route::get('/', 'Admin\\VariationTypeController@list')->name('admin.variation.type.list');

            Route::get('/new', 'Admin\\VariationTypeController@edit')->name('admin.variation.type.create');
            Route::get('/{id}', 'Admin\\VariationTypeController@edit')->name('admin.variation.type.edit');

            Route::put('/new', 'Admin\\VariationTypeController@store');
            Route::put('/{id}', 'Admin\\VariationTypeController@store')->name('admin.variation.type.update');

            Route::delete('/{id}', 'Admin\\VariationTypeController@remove')->name('admin.variation.type.remove');
        });

        Route::group(['prefix' => 'version'], function() {
            Route::get('/', 'Admin\\VersionController@list')->name('admin.version.list');

            Route::get('/new', 'Admin\\VersionController@edit')->name('admin.version.create');
            Route::get('/{id}', 'Admin\\VersionController@edit')->name('admin.version.edit');

            Route::put('/new', 'Admin\\VersionController@store');
            Route::put('/{id}', 'Admin\\VersionController@store')->name('admin.version.update');

            Route::delete('/{id}', 'Admin\\VersionController@remove')->name('admin.version.remove');
        });

        Route::group(['prefix' => 'icon'], function () {
            Route::get('/', 'Admin\\IconController@list')->name('admin.icons.list');

            Route::get('/new', 'Admin\\IconController@edit')->name('admin.icons.create');
            Route::get('/{id}', 'Admin\\IconController@edit')->name('admin.icons.edit');

            Route::put('/new', 'Admin\\IconController@store');
            Route::put('/{id}', 'Admin\\IconController@store')->name('admin.icons.update');

            Route::delete('/{id}', 'Admin\\IconController@remove')->name('admin.icons.remove');

            Route::get('/{id}/variation', 'Admin\\VariationController@list')->name('admin.icons.variations.list');

            Route::get('/{icon}/variation/new', 'Admin\\VariationController@edit')->name('admin.icons.variations.create');
            Route::get('/{icon}/variation/{id}', 'Admin\\VariationController@edit')->name('admin.icons.variations.edit');

            Route::put('/{icon}/variation/new', 'Admin\\VariationController@store');
            Route::put('/{icon}/variation/{id}', 'Admin\\VariationController@store')->name('admin.icons.variations.update');
            //  upload files
            // Route::post('/fileUpload', 'Admin\\VariationController@stuploadFilesore')->name('admin.icons.variations.fileUpload');
        });
    });;

});

Route::group(['prefix' => '/'], function() {

    Route::group(['prefix' => 'contact'], function() {
        Route::get('/', 'ContactController@index')->name('contact');
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

    Route::get('/', 'PagesController@index')->name('home');
    Route::get('/examples', 'PagesController@examples');
    Route::get('/faq', 'PagesController@faq');
    Route::get('/license', 'PagesController@license');
    Route::get('/privacy-policy', 'PagesController@privacyPolicy');
    Route::get('/terms-and-conditions', 'PagesController@tac');

    Route::get('mailable', function() {
        $download = App\Downloads::find(1);
        return new App\Mail\DownloadFont($download);
    });

});