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
/*
Route::get('/users/{id}', function ($id) {
    return 'This is user '.$id;
});
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::resource('agencies', 'AgencyController');
Route::resource('deals', 'DealsController');
Route::resource('bookings', 'BookingsController');
Route::resource('feedbacks', 'FeedbacksController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
