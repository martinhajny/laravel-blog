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

/*
|--------------------------------------------------------------------------
| GET
|--------------------------------------------------------------------------
|
| /home 			Home page
| /post/create 		Form for creating new post
|
|--------------------------------------------------------------------------
| POST
|--------------------------------------------------------------------------
|
| /post/store 		Save information from /post/create to db
|
*/

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
	Route::get('/post/create', [
		'uses' => 'PostsController@create',
		'as' => 'post.create'
	]);

	Route::post('/post/store', [
		'uses' => 'PostsController@store',
		'as' => 'post.store'
	]);

	Route::get('/home', 'HomeController@index')->name('home');
});
