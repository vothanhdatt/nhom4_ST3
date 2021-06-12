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


Route::post('/newsfeed',['as'=>'add-post','uses'=>'PostController@createPost']);
Route::get('/deletepost/{id}','PostController@deletePost');
Route::get('/deletecomment/{id}','CommentController@deleteComment');

Route::post('/comment/{id}','CommentController@createComment');

Route::post('/like/{pid}',['as'=>'like', 'uses'=>'LikeController@likePost']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
