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

Route::get('/', 'dtn\MainController@index')->name('index');

Route::get('/search', 'dtn\MainController@search')->name('search');

Route::get('/movies', 'dtn\MainController@popularMovies')->name('pop_movies');

Route::get('/tvs', 'dtn\MainController@popularTvs')->name('pop_tvs');

Route::get('/movie/{id}', 'dtn\MainController@movie')->name('movie');

Route::get('/tv/{id}', 'dtn\MainController@tv')->name('tv');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/register', 'dtn\registerController@register')->name('register');

Route::get('/user/notifications', 'dtn\userController@notifications')->name('notifications');

Route::get('/user/acceptFriend/{notification}', 'dtn\FriendsController@acceptFriend')->name('acceptFriend');

Route::get('/user/denyFriend/{notification}', 'dtn\FriendsController@denyFriend')->name('denyFriend');

Route::get('/user/addfriend/{second_user}', 'dtn\FriendsController@addFriend')->name('addfriend');

Route::get('/user/addviewedshow', 'dtn\UserShowsController@addDejaVu')->name('add_deja_vu');

Route::get('/user/recommends', 'dtn\UserShowsController@recommend')->name('recommander');

Route::get('/user/{id}', 'dtn\userController@profile')->name('profile');

Route::get('/user/encemoment/addmovie', 'dtn\UserShowsController@addEnCeMoment_movie')->name('add_en_ce_moment_movie');
Route::get('/user/encemoment/addtv/{id_tmdb}', 'dtn\UserShowsController@addEnCeMoment_tv')->name('add_en_ce_moment_tv');


Route::get('/user/{id}/dejavu', 'dtn\UserController@dejaVu')->name('user_deja_vu');

Route::get('user/{id}/friends', 'dtn\userController@friends')->name('friends');

Route::get('logout', 'Auth\LoginController@logout')->name('logout');


