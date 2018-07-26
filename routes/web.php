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

Route::get('/home', 'PostController@index');

Auth::routes();

Route::resource('/posts', 'PostController');
Route::resource('/', 'ThemeController');
Route::resource('/', 'CommentController');

Route::get('/posts/{id}', 'PostController@showUserPosts');