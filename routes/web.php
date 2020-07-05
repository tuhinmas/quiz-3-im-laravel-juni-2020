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
    return view('layouts.artikel.img');
}); 

Route::get('/artikel', 'ArtikelController@index'); // menampilkan halaman form
Route::get('/artikel/create', 'ArtikelController@form');
Route::post('/artikel','ArtikelController@store');
Route::get('/artikel/{id}/edit', 'ArtikelController@edit');
Route::put('/artikel/{id}', 'ArtikelController@update');
Route::delete('/artikel/{id}', 'ArtikelController@delete');
Route::get('/artikel/{id}', 'ArtikelController@show');

