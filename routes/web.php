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
Route::resource('admin/complaints', 'ComplaintsController');



//Route::get('/login', ['as' => 'login', 'uses' => 'Auth\LoginController@']);
//
//Route::get('/register', ['as' => 'register', 'uses' => 'Client\ProductController@getSignUp']);
//
//Route::post('/login', ['as' => 'login', 'uses' => 'Client\ProductController@postSignIn']);
//
//Route::post('/register', ['as' => 'register', 'uses' => 'Client\ProductController@postSignUp']);
//
//Route::get('/logout', ['as' => 'logout', 'uses' => 'Client\ProductController@getLogOut']);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
