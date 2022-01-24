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

//comic

Route::get('/', 'ComicController@index')->name('homepage');
Route::get('/comics', 'ComicController@index')->name('comics');
Route::get('/comics/{comic}', 'ComicController@show')->name('comic');
//lato ADMIN/comic
Route::get('/admin', function () {
    return view('admin.admin');
})->name('admin.homepage');
Route::get('/admin/comics', 'Admin\ComicController@index')->name('admin.comics.index');
Route::get('/admin/comics/create', 'Admin\ComicController@create')->name('admin.comics.create');
Route::post('comics', 'Admin\ComicController@store')->name('admin.comics.store');
Route::get('/admin/comics/{comic}', 'Admin\ComicController@show')->name('admin.comics.show');
Route::get('/admin/comics/{comic}/edit', 'Admin\ComicController@edit')->name('admin.comics.edit');
Route::put('comics/{comic}', 'Admin\ComicController@update')->name('admin.comics.update');
Route::delete('comics/{comic}', 'Admin\ComicController@destroy')->name('admin.comics.destroy');


//movie
Route::get('/movies', 'MovieController@index')->name('movies');
Route::get('/movie/{movie}', 'MovieController@show')->name('movie');

//lato ADMIN/movie
Route::get('/admin/movies', 'Admin\MovieController@index')->name('admin.movies.index');
Route::get('/admin/movies/create', 'Admin\MovieController@create')->name('admin.movies.create');
Route::post('movies', 'Admin\MovieController@store')->name('admin.movies.store');
Route::get('/admin/movies/{movie}', 'Admin\MovieController@show')->name('admin.movies.show');
Route::get('/admin/movies/{movie}/edit', 'Admin\MovieController@edit')->name('admin.movies.edit');
Route::put('movies/{movie}', 'Admin\MovieController@update')->name('admin.movies.update');
Route::delete('movies/{movie}', 'Admin\MovieController@destroy')->name('admin.movies.destroy');
