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

Route::get('/', [
	'as' 	=> 'front.index',
	'uses' 	=> 'FrontController@index'
]);


// Authentication routes...
Route::get('logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('register', [
	'as' 	=> 'register',
	'uses' 	=> 'Auth\AuthController@getRegister'
]);

Route::post('register', [
	'as' 	=> 'register',
	'uses' 	=> 'Auth\AuthController@postRegister'
]);

Route::get('/activate/{code}', [
	'as' 	=> 'activate',
	'uses' 	=> 'Auth\AuthController@getActivate'
]);

Route::get('login', [
	'as' 	=> 'login',
	'uses' 	=> 'Auth\AuthController@getLogin'
]);

Route::post('login', [
	'as' 	=> 'login',
	'uses'	=> 'Auth\AuthController@postLogin'
]);


// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

// Admin
Route::resource('admin', 'AdminController');

// Users
Route::resource('users', 'UsersController');
// Church
Route::resource('church', 'ChurchController');
// Dates
Route::resource('dates', 'DatesController');
Route::get('date', 'DatesController@getList');
// Preachers
Route::resource('preachers', 'PreachersController');
Route::get('preacher', 'PreachersController@getList');
// Sermons
Route::resource('sermons', 'SermonsController');
// Articles
Route::resource('articles', 'ArticlesController');
// Menú
Route::resource('menu', 'MenuController');
// Ads
Route::resource('ads', 'AdsController');
// Verses
Route::resource('verses', 'VersesController');
// Comments
Route::resource('comments', 'CommentsController');
Route::get('comment', 'CommentsController@getList');
// Prayers
Route::resource('prayers', 'PrayersController');
// Notes
Route::resource('notes', 'NotesController');
Route::get('note', 'NotesController@getList');
// Tags
Route::resource('tags', 'TagsController');
Route::get('tag', 'TagsController@getList');


// Show Sermon (Ultimo)
Route::get('/{slug}', [
	'as' 	=> 'show-sermon',
	'uses'	=> 'FrontController@showSermon'
]);


