<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
*/


Route::get('/', 'HomeController@index');

Route::get('about', 'PageController@showAbout');


Route::get('contact', 'PageController@create');

// Post back to /contact after submitting form
Route::post('contact',
  ['as' => 'contact_store', 'uses' => 'PageController@store']);


Route::get('gallery', 'PhotoController@showGallery');

// Routes requiring authentication
Route::group(['middleware' => 'auth'], function()
{
	Route::get('admin', 'AdminController@showAdmin');
	Route::get('admin/upload', function() {
    	return View::make('admin.upload');
	});
	// Post back to /admin/upload after submitting an image for upload
	Route::post('admin/upload', 'AdminController@upload');

});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
