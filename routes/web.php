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

Auth::routes();

Route::resource('/', 'LectionController', ['only' => ['index', 'show']]);
Route::resource('/lections', 'LectionController', ['only' => ['index', 'show']]);

Route::group(['middleware' => 'auth'], function () {
    Route::get('/statistics', 'StatisticsController@index');
    Route::post('/statistics', 'StatisticsController@index');
    Route::resource('tests', 'TestController');

    Route::group(['prefix' => 'admin', 'middleware' => ['admin']], function () {
        Route::get('/', 'Admin\MainController@index');
        Route::resource('lections', 'Admin\LectionController');
        Route::resource('tests', 'Admin\TestController');
        Route::get('tests/add/{id}', 'Admin\TestController@index');
    });
});
