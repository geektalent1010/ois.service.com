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
Route::get('/password-protected', 'LandingController@passwordProtected')->name('password.protected');
Route::post('/password', 'LandingController@password')->name('password');


// Route::group(['middleware' => ['password.protected']], function () {

Auth::routes();

Route::group([], function () {
    Route::get('/', 'LandingController@landing')->name('home');
    Route::get('/landing', 'LandingController@landing')->name('landing');
    Route::post('/landing/setLocale', 'LandingController@setLocale')->name('landing.locale');
});

// Auth Panel
Route::group(['middleware' => ['auth']], function () {

    Route::get('/profile', 'ProfileController@index')->name('profile.index');
    Route::post('/profile/update', 'ProfileController@updateProfile')->name('profile.update');

    Route::get('/calendar', 'CalendarController@index')->name('calendar.index');

    Route::get('/files', 'FilesController@index')->name('files.index');

    Route::get('/news', 'NewsController@index')->name('news.index');

    Route::get('/booking', 'BookingController@index')->name('booking.index');

    Route::get('/iframe-booking', 'BookingController@iframeBooking')->name('booking.iframe');

    Route::get('/admin', 'BookingController@iframeAdmin')->name('booking.iframe.admin');

    Route::get('/application', 'ApplicationController@index')->name('application.index');

    Route::get('/bvn-application', 'ApplicationController@bvn')->name('application.bvn');

    Route::get('/nin', 'ApplicationController@nin')->name('application.nin');

    Route::get('/checklists', 'ApplicationController@checklists')->name('checklists.index');

    Route::get('/usa-checklists', 'ApplicationController@usaChecklists')->name('usaChecklists.index');

    Route::get('/nigerian-checklists', 'ApplicationController@nigerianChecklists')->name('nigerianChecklists.index');

    Route::post('/checklists/filter', 'ApplicationController@checklistFilter')->name('checklists.filter');

    Route::post('/checklists/usafilter', 'ApplicationController@usaChecklistFilter')->name('checklists.usafilter');

    Route::post('/checklists/ninfilter', 'ApplicationController@ninChecklistFilter')->name('checklists.ninfilter');

    Route::post('/checklists/bvnfilter', 'ApplicationController@bvnChecklistFilter')->name('checklists.bvnfilter');

    Route::group(['middleware' => ['admin']], function () {
        Route::get('/roles', 'RolesController@index')->name('roles.index');

        Route::get('/client', 'ClientController@index')->name('client.index');
    });
});

Route::get('/dashboard', 'DashboardController@index')->name('dashboard.index');

Route::get('/introduction', 'IntroductionController@index')->name('introduction.index');

Route::get('/services', 'ServicesController@index')->name('services.index');

Route::get('/innovation', 'InnovationController@index')->name('innovation.index');

Route::get('/security', 'SecurityController@index')->name('security.index');

Route::get('/ehealth', 'EhealthController@index')->name('ehealth.index');

Route::get('/money', 'MoneyController@index')->name('money.index');

Route::get('/shopping', 'ShoppingController@index')->name('shopping.index');

Route::get('/reach', 'ReachController@index')->name('reach.index');

Route::get('/support', 'ContactController@index')->name('contact.index');
Route::post('/support-mail', 'ContactController@send')->name('contact.send');

Route::get('/centers', 'OfficesController@index')->name('offices.index');

Route::post('/getCenters', 'OfficesController@getCenters')->name('offices.center.getCenters');

Route::get('/terms', 'TermsController@index')->name('terms.index');

Route::get('/policy', 'PolicyController@index')->name('policy.index');

Route::get('/protection', 'ProtectionController@index')->name('protection.index');

Route::get('/passport', 'PassportController@index')->name('passport.index');

Route::get('/solutions', 'SolutionsController@index')->name('solutions.index');
Route::get('/faq', 'FaqController@index')->name('faq.index');
Route::get('/book', 'BookController@index')->name('book.index');
Route::get('/backoffice', 'BackOfficeController@index')->name('backoffice.index');
Route::post('/offices/office-filter', 'OfficesController@officeFilter')->name('offices.search');



// Route::get('/home', 'HomeController@index')->name('home');
Route::post('/confirm-email', 'HomeController@confirmEmail')->name('confirm.email');
Route::get('forgot', 'Admin\ForgotPasswordController@index')->name('forgot.index');
Route::get('forgotReset', 'Admin\ForgotPasswordController@reset')->name('forgot.reset');

Route::prefix('admin')->group(function () {
    Route::get('login', 'AdminAuth\LoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'AdminAuth\LoginController@login')->name('admin.login');
    Route::post('logout', 'AdminAuth\LoginController@logout')->name('admin.logout');
    Route::get('forgot', 'Admin\ForgotPasswordController@index')->name('admin.forgot.index');
    Route::post('forgotSend', 'Admin\ForgotPasswordController@send')->name('admin.forgot.send');
    Route::get('forgotReset', 'Admin\ForgotPasswordController@reset')->name('admin.forgot.reset');
    Route::post('forgotResetPassword', 'Admin\ForgotPasswordController@resetPassword')->name('admin.forgot.resetPost');
    Route::middleware(['admin'])->group(function () {
        Route::get('dashboard', 'Admin\DashboardController@index')->name('admin.dashboard.index');

        Route::get('profile', 'Admin\ProfileController@index')->name('admin.profile.index');
        Route::post('profile', 'Admin\ProfileController@updateProfile')->name('admin.profile.update');

        Route::get('manager', 'Admin\AdminManagerController@index')->name('admin.manager.index');
        Route::post('createAdmin', 'Admin\AdminManagerController@createAdmin')->name('admin.manager.create');
        Route::post('updateAdmin', 'Admin\AdminManagerController@updateAdmin')->name('admin.manager.update');
        Route::post('getManagerInfo', 'Admin\AdminManagerController@getManagerInfo')->name('admin.manager.info');
        Route::post('deleteAdmin', 'Admin\AdminManagerController@deleteAdmin')->name('admin.manager.delete');
        Route::post('loadLog', 'Admin\AdminManagerController@loadLog')->name('admin.manager.load');
        Route::post('centerSelect', 'Admin\AdminManagerController@centerSelect')->name('admin.manager.centerSelect');

        Route::get('client', 'Admin\ClientManagerController@index')->name('admin.client.index');
        Route::get('clientDetail', 'Admin\ClientManagerController@detailIndex')->name('admin.client.detail');
        Route::post('createClient', 'Admin\ClientManagerController@createClient')->name('admin.client.create');
        Route::post('updateClient', 'Admin\ClientManagerController@updateClient')->name('admin.client.update');
        Route::post('deleteClient', 'Admin\AdminManagerController@deleteClient')->name('admin.client.delete');
        Route::get('exportCSV', 'Admin\ClientManagerController@exportCSV')->name('admin.client.export');

        Route::get('mail', 'Admin\MailManagerController@index')->name('admin.mail.index');
        Route::post('updateMail', 'Admin\MailManagerController@updateMail')->name('admin.mail.update');

        Route::get('content', 'Admin\ContentManagerController@index')->name('admin.content.index');
        Route::post('getContent', 'Admin\ContentManagerController@getContent')->name('admin.content.get');
        Route::post('updateContent', 'Admin\ContentManagerController@updateContent')->name('admin.content.update');
        Route::get('getCountries', 'Admin\ContentManagerController@getCountries')->name('admin.content.getCountries');

        Route::get('center', 'Admin\CenterManagerController@index')->name('admin.center.index');
        Route::post('centerInfo', 'Admin\CenterManagerController@getCenterInfo')->name('admin.center.info');
        Route::post('updateOffice', 'Admin\CenterManagerController@updateOffice')->name('admin.center.update');

        Route::get('price', 'Admin\PriceManagerController@index')->name('admin.price.index');
        Route::post('getPrice', 'Admin\PriceManagerController@getPrice')->name('admin.price.info');
        Route::post('updatePrice', 'Admin\PriceManagerController@updatePrice')->name('admin.price.update');

        Route::get('checklist', 'Admin\ChecklistManagerController@index')->name('admin.checklist.index');
        Route::post('getChecklist', 'Admin\ChecklistManagerController@getChecklist')->name('admin.checklist.info');
        Route::post('updateChecklist', 'Admin\ChecklistManagerController@updateChecklist')->name('admin.checklist.update');
        Route::post('deleteChecklist', 'Admin\ChecklistManagerController@deleteChecklist')->name('admin.checklist.delete');
        Route::post('uploadChecklistFile', 'Admin\ChecklistManagerController@uploadChecklistFile')->name('admin.checklist.uploadFile');
        Route::post('getServiceType', 'Admin\ChecklistManagerController@getServiceType')->name('admin.checklist.getServiceType');
    });
});

// });
