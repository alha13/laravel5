<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('view1');
});
*/
/*Route::get('/', function () {
    return view('welcome');
});*/


/*Route::get('{n}', function($n) {
	return 'Je suis la page ' . $n . ' !';
})->where('n', '[1-3]');


Route::get('article/{n}', function($n) {
    return view('article')->with('numero', $n);
})->where('n', '[1-9]');



Route::get('facture/{n}', function($n) {
    return view('facture')->withNumero($n);
})->where('n', '[0-9]+');*/


//Route::get('/', 'WelcomeController@index');

Route::get('/', ['uses' => 'WelcomeController@index', 'as' => 'home']);

Route::get('article/{n}', 'ArticleController@show')->where('n', '[0-9]+');


Route::get('users', 'UsersController@getInfos');
Route::post('users', 'UsersController@postInfos');



Route::get('contact', 'ContactController@getForm');
Route::post('contact', 'ContactController@postForm');



Route::get('photo', 'PhotoController@getForm');
Route::post('photo', 'PhotoController@postForm');
//
