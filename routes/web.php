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
    return view('wellcome');
});
//auth


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//admin
Route::resource('admin/account', 'AccountController');
Route::get('/admin/home', function () {
    return view('admin.home');
});

//client
Route::post('/help', 'HelpController@store');
Route::resource('client/complaints', 'ComplaintsController');


