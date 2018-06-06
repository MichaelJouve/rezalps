<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Api Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Api routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your Api!
|
*/
Route::get('posts', 'Api\PostController@index')->name('api-posts-index');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api')->group(function () {
    Route::get('post/{post}', 'Api\PostController@show')->name('api-post-show');
    Route::post('posts', 'Api\PostController@store')->name('api-post-store');
    Route::put('posts/{post}', 'Api\PostController@update')->name('api-post-update');
    Route::delete('posts/{post}', 'Api\PostController@delete')->name('api-post-delete');
});
