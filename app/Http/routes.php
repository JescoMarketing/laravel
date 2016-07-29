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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'role:admin'], function () {

	Route::get('publish', [
		'uses' => 'HomeController@publish',
		'as'   => 'publish'
	]);

});

Route::group(['middleware' => 'auth'], function () {
	
	Route::get('home', [
		'uses' => 'HomeController@index',
		'as'   => 'home'
	]);

	Route::get('account', [
		'uses' => 'AccountController@account',
		'as'   => 'account'
	]);

	Route::get('account/password', 'AccountController@getPassword');
	Route::post('account/password', 'AccountController@postPassword');

	Route::get('account/edit-profile', 'AccountController@editProfile');
	Route::put('account/edit-profile', 'AccountController@updateProfile');

});

// Authentication routes...
Route::get('login', [ 
	'uses' => 'Auth\AuthController@getLogin',
	'as'   => 'login'
	]);

Route::post('login', [
	'uses' => 'Auth\AuthController@postLogin',
	'as'   => 'login'
]);

Route::get('logout', [
	'uses' => 'Auth\AuthController@getLogout',
	'as'   => 'logout'
]);

// Registration routes...
Route::get('register', [
	'uses' => 'Auth\AuthController@getRegister',
	'as'   => 'register'
]);

Route::post('register', [
	'uses' => 'Auth\AuthController@postRegister',
	'as'   => 'register'
]);

Route::get('confirmation/{token}',[
	'uses' => 'Auth\AuthController@getConfirmation',
	'as'   => 'confirmation'
]);

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');