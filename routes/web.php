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
Route::get('/movies/all', 'MoviesController@index');
Route::get('/movies/add', 'MoviesController@index');
Route::get('/movies/{id}', 'MoviesController@show')->name('singleMovie');


