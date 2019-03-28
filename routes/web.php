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
Route::get('/admin/home', function () {
    return view('admin.home');
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

Route::get('/test',function (){
    return "";
});