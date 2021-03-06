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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();
Route::any('/logout', function (){
	
	Auth::logout();
	return redirect('/');
	
});
Route::get('/home', 'HomeController@index')->middleware('auth');
Route::get('/activate-bayar/{id}', 'HomeController@activateBayar')->middleware('auth');
Route::get('/deactivate-bayar/{id}', 'HomeController@deactivateBayar')->middleware('auth');
