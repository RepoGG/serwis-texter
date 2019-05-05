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



Route::get('/', 'PostsController@index');
Route::get('/posts/search', 'PostsController@search');
Route::post('/search', 'PostsController@searchaction');

Route::get('/posts/{id}/create_comment', 'CommentsController@create_comment');


Route::auth();

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/**
Route::post('/', 'PostsController@store');
Route::get('/create', 'PostsController@create');
Route::get('/{id}', 'PostsController@show');
Route::get('/{id}/edit', 'PostsController@edit');
**/
Route::get('posts/{id}/destroy', 'PostsController@destroy');
Route::resource('/posts', 'PostsController');
Route::resource('/posts/{id}/comments', 'CommentsController');