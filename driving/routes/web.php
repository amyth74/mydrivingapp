<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){
    Route::get('/','DashboardController@index');
    Route::resource('/booking','BookingController');
    Route::resource('/course','CourseController');
    Route::resource('/enquiries','EnquiriesController');
    Route::resource('/trainers','TrainersController');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
