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

/* Route::get('/', function () {
    return view('welcome');
}); */
//Route::get('/','AhihiController@index');

//Route::get('/{id}','AhihiController@index1');


Route::get('/welcome','AhihiController@login')->middleware('login');
Route::get('/admin','AhihiController@admin')->middleware('checkage');
Route::get('/{id?}','AhihiController@index1');