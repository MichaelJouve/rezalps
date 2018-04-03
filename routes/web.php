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

Route::get('inscription', 'HomeController@index')->name('home');
Route::get('welcome2', 'HomeController@index');
Route::get('flux', 'HomeController@index');
Route::get('publications', 'HomeController@publications');
Route::get('cv', 'HomeController@index');
Route::get('medias', 'HomeController@index');
Route::get('reseau', 'HomeController@index');
Route::get('parametres', 'HomeController@index');
Route::get('messagerie', 'HomeController@index');
Route::get('cgu', 'HomeController@index');
Route::get('about-us', 'HomeController@index');

Auth::routes();
