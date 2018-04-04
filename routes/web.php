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
Route::get('medias', 'HomeController@medias')->name('medias');
Route::get('reseau', 'HomeController@reseau')->name('reseau');
Route::get('parametres', 'HomeController@parametres')->name('parametres');
Route::get('messagerie', 'HomeController@messagerie')->name('messagerie');
Route::get('cgu', 'HomeController@cgu')->name('cgu');
Route::get('about-us', 'HomeController@about-us')->name('about-us');

Auth::routes();
