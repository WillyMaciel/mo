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


/*
|--------------------------------------------------------------------------
| Login, Registro e Resgate de Senha
|--------------------------------------------------------------------------
*/
Route::controllers([
	'auth'		=> 'Auth\AuthController',
	'password' 	=> 'Auth\PasswordController',
]);


Route::get('/', function () {

	$character = new \App\Game\Character\Character('NightFox');

    return view('welcome', compact('character'));
});
