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

 Route::get('/', 'Auth\AuthController@getRegister');
 Route::get('auth/register', 'Auth\AuthController@getRegister');
 Route::post('auth/register', 'Auth\AuthController@postRegister');
 Route::get('auth/login', 'Auth\AuthController@getLogin');
 Route::post('auth/login', 'Auth\AuthController@postLogin');
 Route::get('home', 'MainController@home');
 // Route::get('home', 'MainController@counter');
 Route::post('results', 'MainController@postSearch');
 Route::get('search', 'MainController@getIndex');
 Route::get('friend', 'MainController@friend');
 Route::post('search/addFriend', 'MainController@getAddFriend');
 Route::post('search/removeFriend', 'MainController@getRemoveFriend');
 Route::get('confess', 'MainController@confess');
 Route::post('confess', 'MainController@store');
 Route::get('chat', 'MainController@chat');
 Route::get('profile', 'MainController@profile');
 Route::get('settings', 'MainController@settings');
 Route::post('settings/changename', 'MainController@changename');
 Route::post('settings/upload', 'MainController@upload');
 Route::get('resetpassword', 'MainController@editpass');
 Route::post('resetpasswordcomplete', 'MainController@updatepass');
 Route::get('auth/logout', 'Auth\AuthController@getLogout');
 