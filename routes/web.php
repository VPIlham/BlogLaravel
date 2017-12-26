<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which

|
*/


// User Routes
Route::group(['namespace' => 'User'],function(){
		Route::get('/','HomeController@index');
		Route::get('post/{post}','PostController@post')->name('post');
		
		Route::get('/show','HomeController@show');
		// Route::resource('/show','PostController');
		// Route::get('/detail','HomeController@detail');
		Route::get('/about','HomeController@about');

		Route::get('post/tag/{tag}','HomeController@tag')->name('tag');
});

//Admin Routes
Route::group(['namespace' => 'Admin'],function(){
	Route::get('admin/home','HomeController@index')->name('admin.home');
	// Post Routes
	Route::resource('admin/post','PostController');
	
	// Tag Routes
	Route::resource('admin/tag','TagController');

	// Admin user Routes
	Route::resource('admin/user','UserController');

	// Admin Auth Routes
	//penamaaan name biasanya yang butuh index baru dengan method get
	Route::get('admin-login', 'Auth\LoginController@showLoginForm')->name('admin.login');
	Route::post('admin-login', 'Auth\LoginController@login');
	
});
	
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

