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

// Route::get('/', function () {
//     return view('wpmapp.hii');
// });

Route::get('play', function () {
    return view('wpmapp.play');
});

Route::get('ya', function () {
    return view('wpmapp.testpage');
});

Route::get('pa', function () {
    return view('wpmapp.testplay');
});

// game route here

Route::get('/', function () {
	return view('wpmapp.page');
});

Route::get('play/bahasa', function () {
    return view('wpmapp.playbahasa');
});

Route::get('play/english', function () {
    return view('wpmapp.playenglish');
});
