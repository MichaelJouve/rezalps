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

Route::prefix('user')->group(function () {

    Route::get('/cv', 'UserController@cv')->name('authUser.cv');
    Route::post('/update-cv', 'UserController@updateCV')->name('update-cv');
    Route::post('/update-apropos', 'UserController@updateApropos')->name('update-apropos');
    Route::get('/settings', 'UserController@settings')->name('settings');
    Route::post('/update-setting', 'UserController@update')->name('update-setting');
    Route::post('/update-avatar', 'UserController@updateAvatar')->name('update-avatar');
    Route::post('/update-password', 'UserController@updatePassword')->name('update-password');
    Route::get('/publications', 'PostController@publications')->name('publications');
    Route::get('/medias', 'MediaController@medias')->name('medias');
    Route::get('/network', 'UserController@network')->name('network');

    Route::get('/edit-post/{id}', 'PostController@edit')->name('edit-post');
    Route::post('/update-post/{id}', 'PostController@update')->name('update-post');

    Route::prefix('{id}')->group(function () {
        Route::get('/', 'UserController@show')->name('show-avatar');
        Route::get('/publications', 'UserController@userPublications')->name('user.publications');
        Route::post('/follow', 'Relationship@create@create')->name('follow');
        Route::post('/unfollow', 'Relationship@destroy')->name('unfollow');
        Route::get('/cv', 'UserController@userCv')->name('user.cv');
        Route::get('/network', 'UserController@userNetwork')->name('user.network');
        Route::get('/medias', 'UserController@medias')->name('user.medias');
    });
});

Route::post('add-pitch', 'UserController@create')->name('add-pitch');

Route::get('messaging', 'MailController@mail')->name('messaging');
Route::post('send-message', 'MailController@create')->name('send-message');
Route::post('add-post', 'PostController@create')->name('add-post');
Route::get('delete-post/{id}', 'PostController@destroy')->name('delete-post');

Route::prefix('comment')->group(function () {
    Route::post('/', 'CommentController@createComment')->name('add-comment');
    Route::get('/{id}/delete', 'CommentController@destroy')->name('delete-comment');
    Route::get('/{id}/update', 'CommentController@update')->name('update-comment');
});

Route::get('cgu', 'HomeController@cgu')->name('cgu');
Route::get('about-us', 'HomeController@aboutUs')->name('about-us');
Route::get('legal-notice', 'HomeController@legalNotice')->name('legal-notice');

Auth::routes();
