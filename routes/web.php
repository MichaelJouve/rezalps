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

Route::get('flux', 'PostController@flux')->name('flux')->middleware('auth');

Route::get('user/{id}/publications', 'UserController@publications')->name('publications')->middleware('auth');
Route::get('user/{id}/cv', 'UserController@cv')->name('cv')->middleware('auth');
Route::get('user/{id}/network', 'UserController@network')->name('network')->middleware('auth');
Route::get('user/{id}/medias', 'UserController@medias')->name('medias')->middleware('auth');

Route::get('user/cv', 'UserController@cv')->name('cv')->middleware('auth');
Route::get('user/network', 'UserController@network')->name('network')->middleware('auth');
Route::get('user/settings', 'UserController@settings')->name('settings')->middleware('auth');

Route::get('messaging', 'MailController@mail')->name('messaging')->middleware('auth');


Route::get('user/publications', 'PostController@publications')->name('publications')->middleware('auth');

Route::get('user/medias', 'MediaController@medias')->name('medias')->middleware('auth');

Route::get('cgu', 'HomeController@cgu')->name('cgu')->middleware('auth');
Route::get('about-us', 'HomeController@about-us')->name('about-us');

Auth::routes();
