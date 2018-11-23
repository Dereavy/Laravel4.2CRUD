<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	//return View::make('hello');
	return('coucou');
});

Route::get('test', function()
{
	//return View::make('hello');
	return('Mon super test');
});

Route::get('test-view', function()
{
	return View::make('tests.view-01');
});

Route::get('navbar', function()
{
	return View::make('templates.layout.home');
});
/*
Route::get('contact', function()
{
	return View::make('templates.layout.contact');
});
*/
Route::get('bienvenue', function()
{
	return View::make('templates.layout.bienvenue');
});

Route::get('admin', function()
{
	return View::make('starter');
});

Route::post('bienvenu','HomeController@bienvenue');

Route::post(
	'bienvenue', 
	function(){
		$formData = Input::all();
		return View::make('templates.layout.bienvenue')->with('formData', $formData);
	}
);

/**
 * CONTACTS
 */

Route::post('contact/add', 'ContactController@addPost');
Route::post('contact/edit/{id}', 'ContactController@editPost');
Route::post('contact/remove/{id}', 'ContactController@delete');

Route::get('contact', 'ContactController@get');
Route::get('contact/add', 'ContactController@addGet');
Route::get('contact/af', 'ContactController@addAF');
Route::get('contact/edit/{id}', 'ContactController@editGet');

