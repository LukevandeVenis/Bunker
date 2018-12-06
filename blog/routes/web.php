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
// Posts
Route::get('/posts', 'PostController@index')->name('posts.index');
Route::get('/posts/create', 'PostController@create')->name('posts.create');
Route::get('/posts/{post}/edit', 'PostController@edit')->name('posts.edit');
Route::get('/posts/{post}/delete', 'PostController@delete')->name('post.delete');
Route::post('/posts/store/{post_id?}', 'PostController@store')->name('posts.store');
// Users
Route::get('/Gebruikers', 'UserController@ShowUserlist')->name('user');
// Logout
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
//comments
Route::post("/posts/{post_id}/comment/create", "CommentController@save");
