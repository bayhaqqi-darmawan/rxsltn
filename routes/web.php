<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/','PagesController@index');
// Route::get('/services','PagesController@services');

Route::resource('posts', 'PostsController');
Route::resource('profiles', 'ProfilesController');

Auth::routes(['verify' => true]);

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'DashboardController@index')->middleware('verified');
Route::resource('roadtax', 'RoadtaxController')->middleware('verified');
Route::resource('bluecards', 'BluecardsController')->middleware('verified');
Route::resource('insurances', 'InsurancesController')->middleware('verified');
Route::resource('admins', 'AdminsController');

// admin protected routes
Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admins'], function () {
    Route::resource('index', 'AdminsController')->middleware('verified');
});

// user protected routes
Route::group(['middleware' => ['auth', 'user'], 'prefix' => 'user'], function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
});

// Route::get('/bluecards/create', 'BluecardsController@create');

// Route::get('/profiles/{ic_number}', 'ProfilesController@show')->name('profiles.show')->middleware('verified');
