<?php

//Auth
Route::get('/', 'BlogController@index');
Route::get('/home', 'HomeController@index');
Auth::routes();

//Blog
Route::resource('blog', 'BlogController');
Route::get('/article/{id}', 'BlogController@show');
Route::post('/createBlog', 'BlogController@store');
Route::post('/updateBlog', 'BlogController@update');
Route::get('/deleteBlog/{id}' 'BlogController@destroy');
Route::get('/article/edit/{id}', 'BlogController@edit');

//Profile
Route::get('/profile/{id}', 'UserController@myProfile');

//Comment
Route::post('/comment', 'CommentController@storeComment');
Route::get('/comment/{id}', 'CommentController@deleteComment');


//Filter Tags
Route::get('/topic/{tag}', 'BlogController@filterTags');
Route::get('/filter/{ tag }', 'BlogController@myProfile');
