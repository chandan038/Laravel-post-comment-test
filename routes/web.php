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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/post', 'PostController@index');
Route::post('/add_post', 'PostController@store')->name('add_post');

Route::get('show-post/{id}', 'PostController@show')->name('show-post');
Route::get('delete/{id}', 'PostController@destroy')->name('delete');

Route::post('/add_post_comment', 'PostCommentController@store')->name('add_post_comment');