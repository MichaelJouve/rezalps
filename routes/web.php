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

Route::get('/', 'HomeController@registration')->name('registration');

Route::get('flux', 'PostController@flux')->name('flux');

Route::get('user/{id}', 'UserController@cv')->name('cv');
Route::get('user/{id}/', 'UserController@cv')->name('cv');
Route::get('user/{id}', 'UserController@cv')->name('cv');
Route::get('user/{id}', 'UserController@cv')->name('cv');
Route::get('user/{id}', 'UserController@cv')->name('cv');
Route::get('user/cv', 'UserController@cv')->name('cv');
Route::get('user/reseau', 'UserController@reseau')->name('reseau');
Route::get('user/parametres', 'UserController@parametres')->name('parametres');

Route::get('messagerie', 'MailController@mail')->name('messagerie');


Route::get('user/publications', 'PostController@publications')->name('publications');

Route::get('user/medias', 'MediaController@medias')->name('medias');

Route::get('cgu', 'HomeController@cgu')->name('cgu');
Route::get('about-us', 'HomeController@about-us')->name('about-us');

Auth::routes();
