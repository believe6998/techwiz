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
//auth
Auth::routes();
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
//admin
Route::get('/admin', function () {
    return view('admin.home-admin');
});

Route::get('/admin/user/list', function () {
    return view('admin.user.list');
});
Route::get('/admin/user/edit', function () {
    return view('admin.user.form');
});
Route::get('/admin/complaint/list', function () {
    return view('admin.complaint.list');
});
//client
Route::post('/help', 'HelpController@store');
Route::resource('/complaints', 'ComplaintsController');

Route::get('/contact', function () {
    return view('client.contact');
});

Route::get('/about', function () {
    return view('client.about');
});

Route::get('/test', function () {
    return "";
});