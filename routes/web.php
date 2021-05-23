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

Route::get('/', 'UserController@index');

Route::get('/login', 'LoginController@index');
Route::get('/register', 'RegisterController@index');
Route::get('/forgot-password', 'ForgotController@index');
Route::get('/reset-password', 'ForgotController@Reset_Password');

Route::resource('ciudad-valles', 'BasicController');
Route::resource('slp', 'SecondCategoryController');
Route::resource('huasteca', 'ThirdCategoryController');
Route::resource('rio-verde', 'FourCategoryController');
Route::resource('tamazunchale', 'FiveCategoryController');
Route::resource('policia', 'SixCategoryController');
Route::resource('de-todo', 'LastCategoryController');

Route::resource('home', 'HomeCategoryController');
