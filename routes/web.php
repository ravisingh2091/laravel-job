<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');


Route::group(['middleware' => 'auth'], function () {

    Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
        Route::get('/', 'AdminController@index')->name('admin.index');
        Route::resource('state', 'StateController');
        Route::resource('user', 'UserController');
        Route::resource('utility', 'UtilityController');
        Route::resource('zip', 'ZipController');
    });

    Route::group(['prefix' => 'referral'], function () {
        Route::post('/send-code/{referralCode}', 'Referral\RequestReferralCodeEmailController@post')
            ->name('referral.request-referral-code');
        Route::post('/send-notice/{referral}', 'Referral\RequestReferralNotificationController@post')
            ->name('referral.request-referral-notification');
    });

    Route::resource('affirmations', 'AffirmationController');
    Route::resource('enrollments', 'EnrollmentController');
    Route::resource('enrollment-payloads', 'EnrollmentPayloadController');
    Route::resource('legal-templates', 'LegalTemplateController');
    Route::resource('products', 'ProductController');
    Route::get('export/products','ProductController@exportExcel')->name('products.export');
    Route::get('export/legal-templates','LegalTemplateController@exportExcel')->name('legal_templates.export');
    Route::get('export/state-document-urls','StateDocumentUrlController@exportExcel')->name('state_document_urls.export');
    Route::resource('survey-results', 'SurveyResultController');
    Route::resource('utility-rates', 'UtilityTerritoryRateController');
    Route::resource('state-document-urls', 'StateDocumentUrlController');
    Route::resource('utility-territory-document-urls', 'UtilityTerritoryDocumentUrlController');

    Route::post('enrollment-payloads/process/{enrollmentPayload}',
        'Enrollment\ProcessEnrollmentPayloadController@post')->name('enrollment-payloads.process');

    Route::prefix('enrollments')->group(function() {
        Route::post('confirmation/{enrollment}',
            'Enrollment\RequestConfirmationEmailController@post')->name('enrollments.request-confirmation');
        Route::post('{enrollment}/export',
            'Enrollment\ExportEnrollmentController@post')->name('enrollments.export');
    });

    Route::prefix('products')->group(function() {
        Route::get('clone/{product}', 'Product\ProductCloneController@create')->name('products.clone');
        Route::post('clone/{product}', 'Product\ProductCloneController@store');
    });

//    Route::get('/tests', 'TestsController@index')->name('tests.index');
//    Route::get('/tests/confirmation', 'TestsController@confirmationEmail')->name('tests.confirmation');

    Route::get('/', 'HomeController@index')->name('home');

});