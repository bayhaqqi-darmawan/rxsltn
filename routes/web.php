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

Route::get('/','PagesController@index');
// Route::get('/services','PagesController@services');

Route::resource('posts', 'PostsController');
// Route::resource('profiles', 'ProfilesController');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::resource('roadtax', 'RoadtaxController');
Route::resource('bluecards', 'BluecardsController');
Route::resource('insurances', 'InsurancesController');
// Route::get('/bluecards/create', 'BluecardsController@create');

Route::get('/profiles/{ic_number}', 'ProfilesController@show')->name('profiles.show');
