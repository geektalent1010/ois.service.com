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

Route::group([], function() {
    Route::get('/', 'LandingController@landing')->name('home');
    Route::get('/landing', 'LandingController@landing')->name('landing');
});

Route::get('/menu', 'MenuController@index')->name('menu.index');

Route::get('/introduction', 'IntroductionController@index')->name('introduction.index');

Route::get('/solutions', 'SolutionsController@index')->name('solutions.index');

Route::get('/services', 'ServicesController@index')->name('services.index');

Route::get('/faq', 'FaqController@index')->name('faq.index');

Route::get('/innovation', 'InnovationController@index')->name('innovation.index');

Route::get('/security', 'SecurityController@index')->name('security.index');

Route::get('/book', 'BookController@index')->name('book.index');

Route::get('/contact', 'ContactController@index')->name('contact.index');
Route::get('/contact/reviewing', 'ContactController@reviewing')->name('contact.reviewing');

Route::get('/money', 'MoneyController@index')->name('money.index');

Route::get('/shopping', 'ShoppingController@index')->name('shopping.index');

Route::get('/ehealth', 'EhealthController@index')->name('ehealth.index');

Route::get('/reach', 'ReachController@index')->name('reach.index');

Route::get('/backoffice', 'BackOfficeController@index')->name('backoffice.index');

Route::get('/offices', 'OfficesController@index')->name('offices.index');

Route::post('/offices/office-filter', 'OfficesController@officeFilter')->name('offices.search');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
