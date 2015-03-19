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


Route::get('/', 'HomeController@index');

Route::get('about', [
	'middleware' => 'guest',
    #'middleware' => 'auth',
    'uses' => 'PageController@showAbout',
]);

Route::get('contact', [
	'middleware' => 'guest',
	'as' => 'contact', 'uses' => 'PageController@create'
]);
Route::post('contact',
  ['as' => 'contact_store', 'uses' => 'PageController@store']);


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
