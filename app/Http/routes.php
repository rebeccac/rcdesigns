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

Route::get('gallery', [
	'middleware' => 'guest',
	'as' => 'gallery', 'uses' => 'PageController@showGallery'
	]);

Route::get('admin', [
	'middleware' => 'auth',
	'as' => 'admin', 'uses' => 'AdminController@showAdmin'
	]);


Route::get('admin/upload', function() {
    return View::make('admin.upload');
});

// Post back to admin/upload after submitting an image for upload
Route::post('admin/upload', 'AdminController@upload');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
