<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/',[
	'as' => 'home',
	'uses' => 'homeController@index'
]);
// Search
Route::get('/search/{info}', [
	'as' => 'search',
	'uses' => 'searchController@show'
]);
// Post
Route::get('/post', [
	'as' => 'post.index',
	'uses' => 'postController@index'
]);
Route::get('/post/create', [
	'as' => 'post.create',
	'uses' => 'postController@create'
]);
Route::post('/post/create', [
	'as' => 'post.store',
	'uses' => 'postController@store'
]);
Route::get('/post/{id}', [
	'as' => 'post.show',
	'uses' => 'postController@show'
]);
Route::get('/post/{id}/edit', [
	'as' => 'post.edit',
	'uses' => 'postController@edit'
]);
Route::put('/post/{id}/edit', [
	'as' => 'post.update',
	'uses' => 'postController@update'
]);
Route::delete('/post/{id}/destroy', [
	'as' => 'post.destroy',
	'uses' => 'postController@destroy'
]);
// usesr

