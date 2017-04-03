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

Route::auth();

Route::get('/', 'BlogController@index');

Route::resource('books', 'BookController');
Route::resource('blog', 'BlogController');

Route::post('/createBlog', 'BlogController@store');
Route::get('/profile', 'BlogController@myProfile');
Route::get('/filter/{ tag }', 'BlogController@myProfile');

Auth::routes();

Route::get('/home', 'HomeController@index');

