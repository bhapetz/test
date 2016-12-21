<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/*Route::get('/', function () {
    return view('index');
});*/

Route::get('/', 'MainController@index');
Route::get('/about', 'MainController@about');
Route::get('/unikom', 'MainController@unikom');
Route::get('/shop', 'MainController@shop');
Route::get('/contact', 'MainController@contact');
