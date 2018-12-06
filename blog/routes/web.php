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

// Authentication
Auth::routes();

// Home
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/vooruitgang', 'HomeController@post')->name('progress');

// Posts
Route::get('/posts', 'PostController@index')->name('posts.index');
Route::get('/posts/create', 'PostController@create')->name('posts.create');
Route::get('/posts/{post}/show', 'PostController@show')->name('posts.show');
Route::get('/posts/{post}/edit', 'PostController@edit')->name('posts.edit');
Route::get('/posts/{post}/delete', 'PostController@delete')->name('post.delete');
Route::post('/posts/store/{post_id?}', 'PostController@store')->name('posts.store');

// Users
Route::get('/users', 'UserController@ShowUserlist')->name('user');
Route::get('/users/{user}/edit', 'UserController@edit')->name('user.edit');
Route::post('/users/store/{user_id?}', 'UserController@store')->name('users.store');

// Logout
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
