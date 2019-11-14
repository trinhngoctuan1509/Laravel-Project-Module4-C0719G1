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
