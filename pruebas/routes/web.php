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
/*
Route::get('/', function () {
    return view('/home/laravel');
});*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'HomeController@index')->name('home.inicio');

Route::get('/listado', 'HomeController@listado')->name('home.listado');
///App/Http/Controllers/

Route::get('/tabla', 'HomeController@tabla')->name('home.tabla');
Route::get('/tabla_ajax', 'HomeController@tabla_ajax')->name('ajax.tabla');

Route::get('/logged', function(){
  return view('home');
});

Route::get('/welcome', function(){
  return view('welcome');
});

Route::get('/tracks', 'TracksController@index')->name('tracks.tabla');

Route::get('/artists', 'ArtistController@index')->name('artist.tabla');

Route::get('/cart', 'CartController@showCart')->name('cart.tabla');
Route::post('/cart', 'CartController@addTrack');


Route::get('artist/{name}', 'ArtistController@show');

Route::get('genres/{name}', 'TracksController@showByGenre');

Route::any('edit_tracks', 'EditController@tracks')->middleware('auth');
Route::any('edit_artists', 'EditController@artists')->middleware('auth');
Route::any('edit_artists/delete', 'ArtistController@delete');
Route::get('edit_genres', 'EditController@genres')->middleware('auth');

Route::any('ArtistCreated', 'ArtistController@create');
Route::any('ArtistUpdated', 'ArtistController@update');
Route::any('ArtistDeleted', 'ArtistController@delete');
Route::any('TrackCreated', 'TracksController@create');
Route::any('TrackUpdated', 'TracksController@update');
Route::any('TrackDeleted', 'TracksController@delete');
Route::any('GenreCreated', 'GenresController@create');
Route::any('GenreUpdated', 'GenresController@update');
Route::any('GenreDeleted', 'GenresController@delete');
