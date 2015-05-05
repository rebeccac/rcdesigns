<?php namespace App\Http\Controllers;
use App\Http\Requests\ContactFormRequest;


class PhotoController extends Controller {

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



    public function showGallery()
    {
        $images = \DB::table('photos')->paginate(12);
        return view('pages.gallery', ['images' => $images]);
    }
}
