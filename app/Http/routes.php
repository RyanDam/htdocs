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
Route::get('/timkiem', [
	'as' => 'search',
	'uses' => 'searchController@search'
]);
// Post
Route::get('/baiviet', [
	'as' => 'post.index',
	'uses' => 'postController@index'
]);
Route::get('/baiviet/tao', [
	'as' => 'post.create',
	'uses' => 'postController@create'
]);
Route::post('/baiviet/tao', [
	'as' => 'post.store',
	'uses' => 'postController@store'
]);
Route::get('/baiviet/{id}', [
	'as' => 'post.show',
	'uses' => 'postController@show'
]);
Route::get('/baiviet/{id}/chinhsua', [
	'as' => 'post.edit',
	'uses' => 'postController@edit'
]);
Route::put('/baiviet/{id}/chinhsua', [
	'as' => 'post.update',
	'uses' => 'postController@update'
]);
Route::delete('/baiviet/{id}/xoa', [
	'as' => 'post.destroy',
	'uses' => 'postController@destroy'
]);
// Cay trong
Route::get('/caytrong', [
	'as' => 'bt.index',
	'uses' => 'bottleTreeController@index'
]);
Route::get('/caytrong/tao', [
	'as' => 'bt.create',
	'uses' => 'bottleTreeController@create'
]);
Route::post('/caytrong/tao', [
	'as' => 'bt.store',
	'uses' => 'bottleTreeController@store'
]);
Route::get('/caytrong/{id}', [
	'as' => 'bt.show',
	'uses' => 'bottleTreeController@show'
]);
Route::get('/caytrong/{id}/chinhsua', [
	'as' => 'bt.edit',
	'uses' => 'bottleTreeController@edit'
]);
Route::put('/caytrong/{id}/chinhsua', [
	'as' => 'bt.update',
	'uses' => 'bottleTreeController@update'
]);
Route::delete('/caytrong/{id}/xoa', [
	'as' => 'bt.destroy',
	'uses' => 'bottleTreeController@destroy'
]);
