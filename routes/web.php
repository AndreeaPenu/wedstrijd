<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'admin'], function(){
    Route::resource('admin/users','AdminUsersController');
   // Route::get('admin/users','AdminUsersController@index');
});

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('competition/participate', 'ParticipationController@participate');

Route::post('competition/upload', 'ParticipationController@upload');