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

Route::get('/', 'HomeController@inscription')->name('inscription');
Route::get('messagerie', 'MessageController@mail')->name('messagerie')->middleware('auth');
Route::get('home', 'PostController@home')->name('home1')->middleware('auth');
Route::get('user/{id}/publications', 'UserController@show')->name('cv')->middleware('auth');
Route::get('user/{id}/cv', 'UserController@cv')->name('cv')->middleware('auth');
Route::get('user/{id}/media', 'UserController@cv')->name('cv')->middleware('auth');
Route::get('user/{id}/reseau', 'UserController@cv')->name('cv')->middleware('auth');

Route::get('reseau', 'UserController@reseau')->name('reseau')->middleware('auth');
Route::get('cv', 'UserController@cv')->name('cv')->middleware('auth')->middleware('auth');
Route::get('parametres', 'UserController@parametres')->name('parametres')->middleware('auth');

Route::get('publications', 'PostController@publications')->name('publications')->middleware('auth');

Route::get('medias', 'MediaController@medias')->name('medias')->middleware('auth');

Route::get('cgu', 'HomeController@cgu')->name('cgu')->middleware('auth');
Route::get('about-us', 'HomeController@about-us')->name('about-us');

Auth::routes();
