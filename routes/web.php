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

Route::get('inscription', 'HomeController@inscription')->name('home');
Route::get('welcome2', 'HomeController@index')->name('welcome');
Route::get('flux', 'HomeController@index')->name('flux');
Route::get('publications', 'HomeController@publications');
Route::get('cv', 'HomeController@cv');
Route::get('medias', 'HomeController@medias');
Route::get('reseau', 'HomeController@reseau');
Route::get('parametres', 'HomeController@parametres');
Route::get('messagerie', 'HomeController@messagerie');
Route::get('cgu', 'HomeController@cgu');
Route::get('about-us', 'HomeController@about-us');

Auth::routes();
