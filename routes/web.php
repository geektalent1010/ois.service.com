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

Route::group([], function () {
  Route::get('/', 'LandingController@landing')->name('home');
  Route::get('/landing', 'LandingController@landing')->name('landing');
});


// Auth Panel
Route::group(['middleware' => ['auth']], function () {
  Route::get('/dashboard', 'DashboardController@index')->name('dashboard.index');

  Route::get('/profile', 'ProfileController@index')->name('profile.index');
  Route::post('/profile/update', 'ProfileController@updateProfile')->name('profile.update');

  Route::get('/calendar', 'CalendarController@index')->name('calendar.index');

  Route::get('/files', 'FilesController@index')->name('files.index');

  Route::get('/news', 'NewsController@index')->name('news.index');

  Route::get('/booking', 'BookingController@index')->name('booking.index');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
