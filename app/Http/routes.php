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


Route::get('/', function()
{
	return view('app');
});



Route::controllers([
    '' => 'Auth\AuthController', 
    'password' => 'Auth\PasswordController',
]);




// Route::post('profile/{id}', [
//     'middleware' => 'auth',
//     'uses' => 'ProfileController@updateProfile'
// ]);

// Registration routes...
//Route::get('register', 'Auth\AuthController@getRegister');
//Route::post('register', 'Auth\AuthController@postRegister');
//Route::get('login', 'Auth\AuthController@getLogin');
//Route::post('login', 'Auth\AuthController@postLogin');
//Route::get('logout', 'Auth\AuthController@getLogout');
//Route::get('email', 'Auth\PasswordController@getEmail');
//Route::post('email', 'Auth\PasswordController@postEmail');
//Route::get('reset/{code}', 'Auth\PasswordController@getReset');
//Route::post('reset', 'Auth\PasswordController@postReset');
