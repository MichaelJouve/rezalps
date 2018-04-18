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
Route::get('welcome', 'HomeController@welcome')->name('welcome');
Route::get('cv', 'UserController@cv')->name('cv');
Route::get('reseau', 'UserController@reseau')->name('reseau');
Route::get('parametres', 'UserController@parametres')->name('parametres');
Route::get('cgu', 'HomeController@cgu')->name('cgu')->middleware('auth');
Route::get('about-us', 'HomeController@about-us')->name('about-us');

Route::get('messagerie', 'MailController@mail')->name('messagerie');

Route::get('flux', 'PostController@flux')->name('flux');
Route::get('publications', 'PostController@publications')->name('publications');

Route::get('medias', 'MediaController@medias')->name('medias');

Auth::routes();
