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

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/master', function () {
    return view('adminlte.master');
});


Route::get('/items/create', function () {
    return view('items.create');
});*/

/*Route::get('/items','ItemsController@index');
Route::get('/items/create','ItemsController@create');
Route::post('/items','ItemsController@store');*/

Route::get('/pertanyaan','PertanyaanController@index');
Route::get('/pertanyaan/create','PertanyaanController@create');
Route::post('/pertanyaan','PertanyaanController@store');
Route::get('/jawaban/{pertanyaan_id}','JawabanController@index');
Route::post('/jawaban/{pertanyaan_id}','JawabanController@store');
Route::get('/pertanyaan/{id}','PertanyaanController@show');
Route::get('/pertanyaan/{id}/edit','PertanyaanController@edit');
Route::put('/pertanyaan/{id}','PertanyaanController@update');
Route::delete('/pertanyaan/{id}','PertanyaanController@destroy');

