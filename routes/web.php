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

Route::get('/',[
    'uses'=>'\W3spiders\Http\Controllers\HomeController@index',
    'as'=>'home',
]);


Route::get('/AboutUs',[
    'uses'=>'\W3spiders\Http\Controllers\HomeController@About',
    'as'=>'AboutUs',
]);