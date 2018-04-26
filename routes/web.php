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

Route::get('/', 'HomeController@index')->name('index');

Route::get('flux', 'PostController@flux')->name('flux');

Route::get('user/{id}/publications', 'UserController@publications')->name('user.publications');
Route::get('user/{id}/cv', 'UserController@cv')->name('user.cv');
Route::get('user/{id}/network', 'UserController@network')->name('user.network');
Route::get('user/{id}/medias', 'UserController@medias')->name('user.medias');

Route::get('user/cv', 'UserController@cv')->name('user.cv');
Route::post('add-cv', 'UserController@create')->name('add-cv');
Route::post('add-pitch', 'UserController@create')->name('add-pitch');
Route::post('user/update-apropos', 'UserController@updateApropos')->name('update-apropos');

Route::get('user/network', 'UserController@network')->name('network');

Route::get('user/settings', 'UserController@settings')->name('settings');
Route::post('user/update-setting', 'UserController@update')->name('update-setting');
Route::post('user/update-avatar', 'UserController@updateAvatar')->name('update-avatar');
Route::post('user/update-password', 'UserController@updatePassword')->name('update-password');

Route::get('messaging', 'MailController@mail')->name('messaging');
Route::post('send-message', 'MailController@create')->name('send-message');

Route::get('user/publications', 'PostController@publications')->name('publications');
Route::post('add-post', 'PostController@create')->name('add-post');
Route::post('add-comment', 'CommentController@createComment')->name('add-comment');

Route::get('user/medias', 'MediaController@medias')->name('medias');

Route::get('cgu', 'HomeController@cgu')->name('cgu');
Route::get('about-us', 'HomeController@aboutUs')->name('about-us');
Route::get('legal-notice', 'HomeController@legalNotice')->name('legal-notice');

Auth::routes();
