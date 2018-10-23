<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mensaje', function () {
    echo "hola mundo tic74";
});


Route::get('/at','curso@areatriangulo');
Route::get('/ac/{radio}','curso@areacirculo');

Route::get('/altamaestro','curso@altamaestro');
Route::POST('/guardamaestro','curso@guardamaestro')->name('guardamaestro');
Route::get('/reportemaestros','curso@reportemaestros');

Route::get('/eliminam/{idm}','curso@eliminam')->name('eliminam');
Route::get('/modificam/{idm}','curso@modificam')->name('modificam');










