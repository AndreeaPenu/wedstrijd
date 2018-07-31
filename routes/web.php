<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'admin'], function(){
	Route::resource('admin/periods', 'AdminPeriodsController');
    Route::resource('admin/users','AdminUsersController');
   // Route::get('admin/users','AdminUsersController@index');
});

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('competition/participate', 'ParticipationController@participate');

Route::post('competition/upload', 'ParticipationController@upload');

Route::post('competition/like', 'ParticipationController@like');

Route::get('send_email', function(){
	Mail::raw('We have chosen an new winner!', function($message)
	{
		$message->subject('The winner of this periods competition is...');
		$message->from('no-reply@nintendo.com', 'Nintendo');
		$message->to('marzone.ap@gmail.com');
	});
});

Route::get('auth/facebook', 'Auth\RegisterController@redirectToProvider');
Route::get('auth/facebook/callback', 'Auth\RegisterController@handleProviderCallback');
