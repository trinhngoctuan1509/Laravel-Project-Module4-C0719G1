<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routs
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
Route::post('/login','LoginController@login')->name('user.login');
// api trong email gửi đi
Route::get('/verifyUser/{token}','UserController@verifyUser')->name('user.verifyUser');

//APi register User
Route::post('/register','UserController@register')->name('user.register');
//api logout user
Route::get('/logout','UserController@logout')->name('user.logout');
//API get user
Route::get('/getAllUsers','UserController@getAllUsers')->name('user.getAllUsers');
Route::get('/getUser','UserController@getUser')->name('user.getAllUsers');
Route::get('/getUserById/{id}','UserController@getUserById')->name('user.getUserById');


Route::put('/getUserById/{id}','UserController@update')->name('user.update');

Route::get('/posts', 'PostController@index')->name('posts.all');
Route::get('/posts/{postId}', 'PostController@show')->name('posts.show');
Route::post('/posts', 'PostController@store')->name('posts.store');
Route::post('/searchPostGeneral', 'PostController@searchPostGeneral')->name('posts.searchPostGeneral');
Route::post('/searchPostByTitle', 'PostController@searchPostByTitle')->name('posts.searchPostByTitle');
Route::post('/searchPostByFengshui', 'PostController@searchPostByFengshui')->name('posts.searchPostByFengshui');
Route::put('/posts/{postId}', 'PostController@update')->name('posts.update');
Route::delete('/posts/{postId}', 'PostController@destroy')->name('posts.destroy');


Route::post('/searchPostApproval', 'PostController@searchPostApproval')->name('posts.searchPostApproval');
Route::post('/searchPostAppred', 'PostController@searchPostAppred')->name('posts.searchPostAppred');

//function get bài đăng đang chờ duyệt
Route::get('/getPostApproval', 'PostController@getPostApproval')->name('posts.getPostApproval');
//function get bài đăng đã duyệt
Route::get('/getPostAppred', 'PostController@getPostAppred')->name('posts.getPostAppred');


Route::get('/getPostDetailApproval/{id}', 'PostController@getPostDetailApproval')->name('posts.getPostDetailApproval');





Route::post('posts/searchPostBasic', 'PostController@searchPostBasic')->name('posts.searchPostBasic');

// Get All Post
Route::get('/postsAll', 'PostController@getAllPost')->name('posts.all');
Route::get('/postsAll/{postId}', 'PostController@showAllpost')->name('postsAll.showAll');
//Posts Auth
Route::post('/my-post', 'PostAuthUserController@store')->name('PostAuthUser.store');
Route::get('/my-post', 'PostAuthUserController@getPostByUser')->name('getPostByUser');
Route::get('/my-post/{postId}', 'PostAuthUserController@show')->name('PostAuthUser.show');
Route::put('/my-post/{postId}', 'PostAuthUserController@update')->name('PostAuthUser.update');
Route::delete('/my-post/{postId}', 'PostAuthUserController@destroy')->name('PostAuthUser.destroy');
Route::post('/my-post/searchTitle', 'PostAuthUserController@searchTitlePostAuth')->name('searchTitlePostAuth');

// Categories
Route::get('/categories', 'CategoryController@index')->name('categories.all');
Route::get('/categories/{categoryID}', 'CategoryController@show')->name('categories.show');
Route::post('/categories','CategoryController@createNewCategory');
Route::post('/deleteCategory','CategoryController@deleteCategory');
Route::post('/editCategory','CategoryController@editCategory');
// Region
Route::get('/region', 'RegionController@index')->name('region.all');
Route::get('/region/{regionId}', 'RegionController@show')->name('region.show');
Route::get('/getAllRegions','RegionController@getAllRegions');
Route::post('/createNewRegion','RegionController@createNewRegion');
Route::post('/deleteRegion','RegionController@deleteRegion');
Route::post('/editRegion','RegionController@editRegion');
//Seller
Route::get('/seller', 'SellerController@index')->name('seller.all');
Route::get('/seller/{sellerId}', 'SellerController@show')->name('seller.show');

//PostOfType
Route::get('/postOfType', 'PostOfTypeController@index')->name('PostOfType.all');
Route::get('/postOfType/{postOfTypeId}', 'PostOfTypeController@show')->name('postOfType.show');
Route::get('/getAllPostOfType','PostOfTypeController@getAllPostOfType');
Route::post('/editPostOfType','PostOfTypeController@editPostOfType');
Route::post('/deletePostOfType','PostOfTypeController@deletePostOfType');
Route::post('/createNewPostOfType','PostOfTypeController@createNewPostOfType');


//statusOfPost
Route::get('/statusOfPost', 'StatusOfPostController@index')->name('statusOfPost.all');
Route::get('/statusOfPost/{statusOfPostId}', 'StatusOfPostController@show')->name('statusOfPost.show');

//direction
Route::get('/direction', 'DirectionController@index')->name('direction.all');
Route::get('/direction/{directionId}', 'DirectionController@show')->name('direction.show');

Route::get('/helps', 'HelpsController@index')->name('helps.all');
Route::post('/helps', 'HelpsController@store')->name('helps.store');



// Edit User New
Route::post('/editUser','UserController@EditUser');
Route::get('/lockAccountEmployee/{id}','UserController@lockAccountEmployee');
Route::get('/unLockAccountEmployee/{id}','UserController@unLockAccountEmployee');

Route::put('/editUsers/{editUsersId}', 'UserController@update')->name('editUsers.update');
//loginadmin
Route::post('/loginAdmin','LoginAdminController@login')->name('user.loginAdmin');



// Get tất cả bài Post bằng UserID
Route::post('/getAllPostOfUserByUserId','PostController@getAllPostOfUserByUserId');
// Khóa tài khoản user
Route::post('/lockUserAccount','UserController@lockUserAccount');
Route::post('/unlockUserAccount','UserController@unlockUserAccount');
Route::get('/getEmployeeById/{id}','UserController@getEmployeeById');


//thay doi mat khau
Route::post('changepassword', 'UserController@postChangePassword');
Route::post('/updateedit', 'UserController@putupdateeditusers');

//
Route::post('/getNumberOfPostOfUserByUserId','PostController@getNumberOfPostOfUserByUserId');
Route::get('/getNumberOfUsers','UserController@getNumberOfUsers');
Route::post('/findUser','UserController@findUser');
Route::post('changeStatusPostAppvoral','PostController@changeStatusPostAppvoral');
Route::post('changeStatusPostAppved','PostController@changeStatusPostAppved');


Route::get('getEmployees','UserController@getEmployees');
Route::get('getAllLevelOfUser','LevelController@getAllLevelOfUser');
Route::delete('deleteEmployee/{id}','UserController@deleteEmployee');
Route::put('updateEmployee','UserController@updateEmployee');
Route::put('changePasswordEmployee','UserController@changePasswordEmployee');
Route::post('/addEmployee','UserController@addEmployee')->name('addEmployee');


// Traffic
Route::post('/traffic','TrafficController@addView');
Route::get('/traffic','TrafficController@totalView');
Route::post('/countViewDate','TrafficController@countViewDate');


Route::post('/viewpost','PostViewController@upView');
Route::get('/viewpost/topview','PostViewController@getTopView');

