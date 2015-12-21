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
Route::get('/','NewsController@index' );
Route::get('/about','NewsController@about' );
Route::get('/create',  'NewsController@create' );
Route::get('/store',  'NewsController@store' );
Route::get('/update/imagem/{id}',  'NewsController@imagem' );
Route::get('/delete/{id}',  'NewsController@delete' );
Route::get('/edit/{id}',  'NewsController@edit' );
/*Route::get('/', function () {
   
    return view('welcome');
});*/
