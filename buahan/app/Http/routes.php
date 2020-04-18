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

Route::get('/buahan','BuahanController@index');

Route::get('/buahan/tambahh','BuahanController@tambahh');
Route::post('/buahan/store','BuahanController@store');

Route::get('/buahan/editt/{id}','BuahanController@editt');
Route::post('/buahan/update','BuahanController@update');

Route::get('/buahan/hapus/{id}','BuahanController@hapus');