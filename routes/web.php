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
Route::get('publications', 'HomeController@publications')->name('publications');
Route::get('cv', 'HomeController@cv')->name('cv');
Route::get('medias', 'HomeController@index')->name('medias');
Route::get('reseau', 'HomeController@index')->name('reseau');
Route::get('parametres', 'HomeController@index')->name('parametres');
Route::get('messagerie', 'HomeController@index')->name('messagerie');
Route::get('cgu', 'HomeController@index')->name('cgu');
Route::get('about-us', 'HomeController@index')->name('about-us');

Auth::routes();
