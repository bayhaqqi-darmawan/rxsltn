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
Auth::routes(['verify' => true]);

Route::get('/','PagesController@index');
Route::resource('profiles', 'ProfilesController')->middleware('verified');
Route::get('/dashboard', 'DashboardController@index')->middleware('verified');
Route::resource('roadtax', 'RoadtaxController')->middleware('verified');
Route::resource('bluecards', 'BluecardsController')->middleware('verified');
Route::resource('insurances', 'InsurancesController')->middleware('verified');
Route::resource('admins', 'AdminsController')->middleware('verified');

Route::get('payment', 'PaymentController@index');
Route::post('charge', 'PaymentController@charge');
Route::get('paymentsuccess', 'PaymentController@payment_success');
Route::get('paymenterror', 'PaymentController@payment_error');

Route::get('/delivery', 'ScheduleController@index')->middleware('verified');;

Route::get('/schedule', 'ScheduleController@edit');

Route::get('reason', 'RoadtaxController@reason');

Route::get('/receipt', function(){
    return view('receipt.index');
});
