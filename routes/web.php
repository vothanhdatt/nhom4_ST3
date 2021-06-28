<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/{id?}', 'UserController@index');

Route::get('/', 'HomeController@index')->name('home');
Route::get('/newsfeed', 'HomeController@index')->name('home');
Route::get('/timeline/{id}','UserController@timeline');
Route::get('/timeline','UserController@timeline');

Route::get('/about', function () {
    return view('user.about');
});
Route::get('/photos', function () {
    return view('user.photos');
});
Route::get('/setting', function () {
    return view('user.setting');
});
//user
Route::get('/deleteuser/{id}',['as'=>'deleteuser', 'uses'=>'UserController@deleteuser']);

//Post
Route::get('/deletepost/{id}','PostController@deletePost');
Route::post('/editpost/{pid}',['as'=>'editpost', 'uses'=>'PostController@editPost']);
Route::post('/newsfeed',['as'=>'add-post','uses'=>'PostController@createPost']);

//Comment
Route::post('/deletecomment/{id}','CommentController@deleteComment');
Route::post('/comment/{id}','CommentController@createComment');
Route::post('/editcomment/{id}','CommentController@editComment');

//Like
Route::post('/like/{pid}',['as'=>'like', 'uses'=>'LikeController@likePost']);

//Friend
Route::post('/addfriend/{id}',['as'=>'addfriend', 'uses'=>'FriendController@addFriend']);
Route::post('/deletefriend/{id}',['as'=>'deletefriend', 'uses'=>'FriendController@deleteFriend']);
Route::post('/acceptfriend/{id}',['as'=>'acceptfriend', 'uses'=>'FriendController@acceptFriend']);
Route::post('/unfriend/{id}',['as'=>'unfriend', 'uses'=>'FriendController@unFriend']);
Route::post('/removerequest/{id}',['as'=>'removerequest', 'uses'=>'FriendController@removeRequest']);
//Follow
Route::post('/follow/{id}',['as'=>'follow', 'uses'=>'FollowController@follow']);
Route::post('/unfollow/{id}',['as'=>'unfollow', 'uses'=>'FollowController@unfollow']);
//About
Route::get('/about/{id}',['as'=>'about', 'uses'=>'UserController@about']);
Route::get('/friends/{id}',['as'=>'friends', 'uses'=>'UserController@friends']);
Route::get('/photos/{id}',['as'=>'photos', 'uses'=>'UserController@photos']);
Route::get('/setting/{id}',['as'=>'setting', 'uses'=>'UserController@setting']);
//Edit profile
Route::post('/editprofile/{id}',['as'=>'editprofile', 'uses'=>'UserController@editprofile']);
//Search
Route::post('/search',['as'=>'search', 'uses'=>'UserController@search']);
//Admin
Route::get('/admin',['as'=>'admin', 'uses'=>'UserController@admin']);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
