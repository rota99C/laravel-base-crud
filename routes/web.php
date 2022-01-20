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
    return view('homepage');
})->name('homepage');
Route::get('/comics', 'ComicController@index')->name('comics');
Route::get('/comics/{comic}', 'ComicController@show')->name('comic');


//lato ADMIN


Route::get('/admin/comics', 'Admin\ComicController@index')->name('admin.comics.index');
Route::get('/admin/comics/create', 'Admin\ComicController@create')->name('admin.comics.create');
Route::post('comics', 'Admin\ComicController@store')->name('admin.comics.store');
Route::get('/admin/comics/{comic}', 'Admin\ComicController@show')->name('admin.comics.show');
Route::get('/admin/comics/{comic}/edit', 'Admin\ComicController@edit')->name('admin.comics.edit');
Route::put('comics/{comic}', 'Admin\ComicController@update')->name('admin.comics.update');
Route::delete('comics/{comic}', 'Admin\ComicController@destroy')->name('admin.comics.destroy');
