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

Route::get('/customers', 'CustomerController@index')->name('customers.all');
Route::get('/customers/{customerId}', 'CustomerController@show')->name('customers.show');
Route::post('/customers', 'CustomerController@store')->name('customers.store');
Route::put('/customers/{customerId}', 'CustomerController@update')->name('customers.update');
Route::delete('/customers/{customerId}', 'CustomerController@destroy')->name('customers.destroy');


Route::get('/posts', 'PostController@index')->name('posts.all');
Route::get('/posts/{postId}', 'PostController@show')->name('posts.show');
Route::post('/posts', 'PostController@store')->name('posts.store');
Route::post('/searchPostAdvanced', 'PostController@searchPostAdvanced')->name('posts.searchPostAdvanced');
Route::put('/posts/{postId}', 'PostController@update')->name('posts.update');
Route::delete('/posts/{postId}', 'PostController@destroy')->name('posts.destroy');
Route::post('posts/searchPostBasic', 'PostController@searchPostBasic')->name('posts.searchPostBasic');

// Get All Post
Route::get('/postsAll', 'PostController@getAllPost')->name('posts.all');

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
