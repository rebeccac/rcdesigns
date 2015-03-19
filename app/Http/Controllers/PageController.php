<?php namespace App\Http\Controllers;
use App\Http\Requests\ContactFormRequest;


class PageController extends Controller {

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
	 *
	 * @return void
	 */
	public function __construct()
	{
		// $this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function showAbout()
	{
		return view('pages.about');
	}

	public function create()
	{
		return view('pages.contact');
	}
	public function store(ContactFormRequest $request)
	{
	    \Mail::send('emails.contact',
	        array(
	            'name' => $request->get('name'),
	            'email' => $request->get('email'),
	            'user_message' => $request->get('message')
	        ), function($message)
	    {
	        $message->from(\Request::input('email'));
	        $message->to('rcordingleydesigns@gmail.com', 'Admin')->subject('Rebecca Cordingley Designs Feedback');
	    });

	  return \Redirect::route('contact')->with('message', 'Thanks for contacting us!');

	}

}
