<?php

// use Illuminate\Http\Request;


// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


// Route::get('/employer', function(Request $request) {
// 	if ($request->user()->hasRole('manager')) {
// 		return redirect('/home');
// 	}

// 	return 'Welocme';
// }); first comment



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('manager');
Route::get('/employer', 'HomeController@index')->middleware('employee');