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
//Route::get('/posts/search', 'TexterSearch@search');
Route::get('/search', 'PostsController@search');
//Route::get('/posts/search/action', 'TexterSearch@action')->name('text_search.action');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/**
Route::post('/', 'PostsController@store');
Route::get('/create', 'PostsController@create');
Route::get('/{id}', 'PostsController@show');
Route::get('/{id}/edit', 'PostsController@edit');
**/


Route::resource('/posts', 'PostsController');
