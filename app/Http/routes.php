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

Route::get('/', function () {
    return view('home.index');
});

Route::get('home', function () {
    return view('home.index');
});

Route::get('stats', function () {
    return view('stats.index');
});

Route::get('matches', function () {
    return view('matches.index');
});

Route::get('posts', function () {
    return view('posts.index');
});

Route::get('register', function () {
    return view('auth.register');
});

Route::get('login', function () {
    return view('auth.login');
});
