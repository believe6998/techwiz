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
    return view('home');
});

Route::resource('admin/account', 'AccountController');
//<<<<<<< HEAD
Route::resource('client/complaints', 'ComplaintsController');

//=======
//Route::resource('admin/complaints', 'ComplaintsController');
//>>>>>>> 6c52878a623da68a12f7c0a9d3b9dd5a40278c89
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/help', 'HelpController@store');

Auth::routes();

//client
//Route::resource('/home', function ());

Route::get('/home', function () {
    return view('client.home');
});
Route::get('/test', function () {
    return view('client.test');
});

