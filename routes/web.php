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
    return view('layout/home');
});

Route::get('/addUser', function(){
	return view('adduser');
});

Route::get('/registerNewPatient', function(){
	return view('registerNewPatient');
});

Route::get('/getPayment', function(){
	return view('payment');
});

Route::get('/login', function(){
	return view('login');
});

Route::get('/treatment', function(){
	return view('treatment');
});