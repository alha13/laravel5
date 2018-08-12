<?php 

	namespace App\Http\Controllers;

	use Mail;

	use App\Http\Requests\ContactRequest;

	

	/**
	 * class contac
	 */
	class ContactController extends Controller
	{
		
		public function getForm()
		{
			# code...
				return view('contact'); 
		}

		public function postForm(ContactRequest $request)
	{
		Mail::send('email_contact', $request->all(), function($message) 
		{
			$message->to('orangecrack01@gmail.com')->subject('Contact test laraval5');
		});

		return view('confirm');
	}
	}