<?php namespace App\Http\Controllers;
use App\Http\Requests\ContactFormRequest;
use Input;
use Validator;
use Redirect;
use Request;
use Session;

class AdminController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application welcome screen to the user.
	 * @return Response
	 */

     public function showAdmin()
     {
         return view('admin.admin');
     }

	public function upload() {
	  // getting all of the post data
	  $file = array('image' => Input::file('image'));
	  // setting up rules
	  $rules = array('image' => 'required',); //mimes:jpeg,bmp,png and for max size max:10000
	  // doing the validation, passing post data, rules and the messages
	  $validator = Validator::make($file, $rules);
	  if ($validator->fails()) {
	    // send back to the page with the input data and errors
	    return Redirect::to('admin/upload')->withInput()->withErrors($validator);
	  }
	  else {
	    // check file is valid.
	    if (Input::file('image')->isValid()) {
	      $destinationPath = 'images'; // upload path
	      $extension = Input::file('image')->getClientOriginalExtension(); // getting image extension
	      $fileName = rand(11111,99999).'.'.$extension; // renameing image
	      Input::file('image')->move($destinationPath, $fileName); // uploading file to given path

		  // set name of file as Session variable and redirect back to upload page with success message
		  Session::set('filename', $fileName);
	      Session::flash('success', 'Upload successfully');
	      return Redirect::to('admin/upload');
	    }
	    else {
	      // sending back with error message.
	      Session::flash('error', 'uploaded file is not valid');
	      return Redirect::to('admin/upload');
	    }
	  }
	}

}
