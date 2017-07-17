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

Route::group(['middleware' => ['web','auth', 'level:1']] , function() {
	Route::resource('users','UsersController');
	Route::get('users/{site}/delete', ['as' => 'users.delete', 'uses' => 'UsersController@destroy']);
});

Auth::routes();


Route::group(['middleware' => ['web','auth']] , function() {
	Route::get('/', function () {
		return view('admin.index');
	});
	
	Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
});

