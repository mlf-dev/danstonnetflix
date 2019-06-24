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

Route::get('/', 'dtn\MainController@index')->name('home');

Route::get('/search', 'dtn\MainController@search')->name('search');

Route::get('/movies', 'dtn\MainController@popularMovies')->name('pop_movies');

Route::get('/tvs', 'dtn\MainController@popularTvs')->name('pop_tvs');

Route::get('/movie/{id}', 'dtn\MainController@movie')->name('movie');

Route::get('/tv/{id}', 'dtn\MainController@tv')->name('tv');