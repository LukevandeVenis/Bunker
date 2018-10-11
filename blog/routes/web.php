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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

<<<<<<< HEAD
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
=======
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
>>>>>>> 1510ed1d499a21db3894cee207b6aa0a5fa2fa88
