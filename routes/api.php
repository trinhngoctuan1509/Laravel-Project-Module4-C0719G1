<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/comments', 'CommentController@index')->name('comments.all');
Route::get('/comments/{commentId}', 'CommentController@show')->name('comments.show');
Route::post('/comments', 'CommentController@store')->name('comments.store');
Route::put('/comments/{commentId}', 'CommentController@update')->name('comments.update');
Route::delete('/comments/{commentId}', 'CommentController@destroy')->name('comments.destroy');

Route::get('/customers', 'CustomerController@index')->name('customers.all');
Route::get('/customers/{customerId}', 'CustomerController@show')->name('customers.show');
Route::post('/customers', 'CustomerController@store')->name('customers.store');
Route::put('/customers/{customerId}', 'CustomerController@update')->name('customers.update');
Route::delete('/customers/{customerId}', 'CustomerController@destroy')->name('customers.destroy');

// API login with email
Route::post('/login','UserController@login')->name('user.login');

//APi register User
Route::post('/register','UserController@register')->name('user.register');
//API get user
Route::get('/getUser','UserController@getUser')->name('user.getUser');


Route::get('/posts', 'PostController@index')->name('posts.all');
Route::get('/posts/{postId}', 'PostController@show')->name('posts.show');
Route::post('/posts', 'PostController@store')->name('posts.store');
Route::post('/searchPostGeneral', 'PostController@searchPostGeneral')->name('posts.searchPostGeneral');
Route::put('/posts/{postId}', 'PostController@update')->name('posts.update');
Route::delete('/posts/{postId}', 'PostController@destroy')->name('posts.destroy');



Route::post('posts/searchPostBasic', 'PostController@searchPostBasic')->name('posts.searchPostBasic');

// Get All Post
Route::get('/postsAll', 'PostController@getAllPost')->name('posts.all');

// Categories
Route::get('/categories', 'CategoryController@index')->name('categories.all');

// Region
Route::get('/region', 'RegionController@index')->name('region.all');
