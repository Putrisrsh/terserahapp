<?php

use Illuminate\Support\Facades\Route;

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

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/pembeli','PembeliController@index');
Route::post('/pembeli/create','PembeliController@create');
Route::get('/pembeli/{kode_pembeli}/edit','PembeliController@edit');
Route::post('/pembeli/{kode_pembeli}/update','PembeliController@update');
Route::get('/pembeli/{kode_pembeli}/delete','PembeliController@delete');
Route::get('/search','PembeliController@search');

