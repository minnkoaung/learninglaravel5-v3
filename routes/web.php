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

// Route::get('/', function () {
// 	return "Here our new home page";
// });
Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/tickets', 'TicketsController@index');
Route::get('/ticket/{slug?}', 'TicketsController@show');
Route::get('/contact', 'TicketsController@create');
Route::post('/contact', 'TicketsController@store');
Route::get('/ticket/{slug?}/edit', 'TicketsController@edit');
Route::post('/ticket/{slug?}/edit', 'TicketsController@update');
Route::post('/ticket/{slug?}/delete', 'TicketsController@destroy');

Route::get('sendemail', function () {
	$data = array(
		'name' => "Test Email",
	);
	Mail::send('emails.welcome', $data, function ($message) {
		$message->from('TickteCenter@mymail.com', 'Ticket Center');
		$message->to('89419f89f4774a@ smtp.mailtrap.io')->subject('Learning Laravel test email');
		// $message->from('minnkoaung@laravel.com', 'Learning Laravel');
		// $message->to('minnkoaung@gmail.com')->subject('Learning Laravel test email');
	});
	return "Your email has been sent successfully";
});
