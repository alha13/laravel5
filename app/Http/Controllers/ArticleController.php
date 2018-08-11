<?php

namespace App\Http\Controllers;

use Illuminate\Http\Resquest;

use App\Http\Resquests;
use App\Http\Controllers\Controller;

/**
 * premiere classe pour afficher une pase en lui envoyant une variable
 */
class ArticleController extends Controller
{
	
	public  function show($n)
	{
		# code...
		//return view('article')->with('numero', $n);

		//les deux codes sont identic
		return view('article')->withNumero($n);
	}
}
