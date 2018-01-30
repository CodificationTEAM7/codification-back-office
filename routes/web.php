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
    return view('dashboard');
});

Route::get('home', function () {
    return view('home');
});


Route::get('/login', function () {
    return view('login');
});

Route::get('batiment', function () {
    return view('batiment');
});

Route::get('reservation', function () {
    return view('reservation');
});

Route::get('codification', function () {
    return view('codification');
});

Route::get('details', function () {
    return view('details');
});

Route::get('voirdetails', function () {
    return view('voirdetails');
});
