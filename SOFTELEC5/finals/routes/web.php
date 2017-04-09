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

//Auth
Route::get('/', 'BlogController@index');
Auth::routes();

//Blog
Route::resource('blog', 'BlogController');
Route::get('/home', 'HomeController@index');
Route::get('/article/{id}', 'BlogController@show');
Route::post('/createBlog', 'BlogController@store');

//Profile
Route::get('/profile/{id}', 'UserController@myProfile');

//Comment
Route::post('/comment', 'CommentController@storeComment');
Route::get('/comment/{id}', 'CommentController@deleteComment');


//Filter Tags
Route::get('/topic/{tag}', 'BlogController@filterTags');
Route::get('/filter/{ tag }', 'BlogController@myProfile');
