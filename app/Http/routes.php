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

//Route::get('/', function () {
  //  return view('welcome');

// Route::resource('/', 'MainController@index');
// Route::resource('home', 'MainController@home');

// Route::controllers([
//  	'auth' => 'Auth\AuthController',
//  	'password' => 'Auth\PasswordController',

//  ]);

//Route::get('/', 'MainController@welcome');

// Authentication routes...


// Registration routes...
 Route::get('/', 'Auth\AuthController@getLogin');
 Route::get('auth/register', 'Auth\AuthController@getRegister');
 Route::post('auth/register', 'Auth\AuthController@postRegister');
 Route::get('auth/login', 'Auth\AuthController@getLogin');
 Route::post('auth/login', 'Auth\AuthController@postLogin');
 Route::get('home', 'MainController@home');
 Route::get('auth/logout', 'Auth\AuthController@getLogout');
 Route::get('auth/chat', 'MainController@chat');