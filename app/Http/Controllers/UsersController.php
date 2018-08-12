<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
/**
 * pour get et post
 */
class UsersController extends Controller
{
	
	public function getInfos()
	{
		# code..
		return view('infos');
	
	}

	public function postInfos(Request $request)
	{
		return 'Le nom est ' . $request->input('nom'); 
		
	

	}
}



