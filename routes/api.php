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
Route::post('/searchPostByTitle', 'PostController@searchPostByTitle')->name('posts.searchPostByTitle');
Route::post('/searchPostByFengshui', 'PostController@searchPostByFengshui')->name('posts.searchPostByFengshui');
Route::put('/posts/{postId}', 'PostController@update')->name('posts.update');
Route::delete('/posts/{postId}', 'PostController@destroy')->name('posts.destroy');



Route::post('posts/searchPostBasic', 'PostController@searchPostBasic')->name('posts.searchPostBasic');

// Get All Post
Route::get('/postsAll', 'PostController@getAllPost')->name('posts.all');
Route::get('/postsAll/{postId}', 'PostController@showAllpost')->name('postsAll.showAll');

// Categories
Route::get('/categories', 'CategoryController@index')->name('categories.all');
Route::get('/categories/{categoryID}', 'CategoryController@show')->name('categories.show');
// Region
Route::get('/region', 'RegionController@index')->name('region.all');
Route::get('/region/{regionId}', 'RegionController@show')->name('region.show');
//Seller
Route::get('/seller', 'SellerController@index')->name('seller.all');
Route::get('/seller/{sellerId}', 'SellerController@show')->name('seller.show');

//PostOfType
Route::get('/postOfType', 'PostOfTypeController@index')->name('PostOfType.all');
Route::get('/postOfType/{postOfTypeId}', 'PostOfTypeController@show')->name('postOfType.show');
//PostOfType
Route::get('/statusOfPost', 'StatusOfPostController@index')->name('statusOfPost.all');
Route::get('/statusOfPost/{statusOfPostId}', 'StatusOfPostController@show')->name('statusOfPost.show');

//
Route::get('/direction', 'DirectionController@index')->name('direction.all');
Route::get('/direction/{directionId}', 'DirectionController@show')->name('direction.show');
