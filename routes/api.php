<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::prefix('products')->group(function() {
    Route::get('{marketer}/zip/{zip}/{revenueClass}', 'Product\ProductZipSearchController@show')
        ->where([
            'marketer' => '(PE|CU|IE)',
            'zip' => '\d{5}',
            'revenueClass' => '(residential|commercial|all)'
        ]);

    Route::get('{marketer}/{zip}/{id}', 'Product\ProductDetailsController@show')
        ->where([
            'marketer' => '(PE|CU|IE)',
            'zip' => '\d{5}'
        ]);

    Route::get('{id}/terms/{locale}', 'Product\TermsController@show')->name('api.product.terms');
    Route::get('{id}/contract_summary/{locale}', 'Product\ContractSummaryController@show')->name('api.product.contract_summary');
    Route::get('{id}/contract_summary/{locale}/pdf', 'Product\ContractSummaryPdfController@show')
        ->where([
            'locale' => '^(en|es)$',
        ])
        ->name('api.product.contract_summary.pdf');
});

Route::prefix('e-products')->group(function() {
    Route::get('{marketer}/{zipCode}/{id}/contract_summary/{locale}', 'Product\Eos\ContractSummaryController@show')->name('api.eos_product.contract_summary');
    Route::get('{marketer}/{zipCode}/{id}/contract_summary/{locale}/pdf', 'Product\Eos\ContractSummaryPdfController@show')
        ->where([
            'marketer' => '(PE|CU|IE)',
            'locale' => '^(en|es)$',
        ])
        ->name('api.eos-product.contract_summary.pdf');
});


Route::get('/states/{marketer}/{zip}', 'State\StateDetailsController@show')
    ->where([
        'marketer' => '(PE|CU|IE)',
        'zip' => '\d{5}'
    ]);

Route::get('/terms/{marketer}/{zip}/{locale}', 'State\ZipTermsController@show')
    ->where([
        'marketer' => '(PE|CU|IE)',
        'zip' => '\d{5}'
    ]);

Route::get('/terms/{marketer}/{state_code}/{locale}', 'State\StateTermsController@show')
    ->where([
        'marketer' => '(PE|CU|IE)',
        'state_code' => '^(?:(A[KLRZ]|C[AOT]|D[CE]|FL|GA|HI|I[ADLN]|K[SY]|LA|M[ADEINOST]|N[CDEHJMVY]|O[HKR]|P[AR]|RI|S[CD]|T[NX]|UT|V[AIT]|W[AIVY]))$',
        'locale' => '^(en|es)$',
    ])
    ->name('api.state.terms');

Route::get('/terms/{marketer}/{state_code}/{locale}/pdf', 'State\StateTermsPdfController@show')
    ->where([
        'marketer' => '(PE|CU|IE)',
        'state_code' => '^(?:(A[KLRZ]|C[AOT]|D[CE]|FL|GA|HI|I[ADLN]|K[SY]|LA|M[ADEINOST]|N[CDEHJMVY]|O[HKR]|P[AR]|RI|S[CD]|T[NX]|UT|V[AIT]|W[AIVY]))$',
        'locale' => '^(en|es)$',
    ])
    ->name('api.state.pdf.terms');

Route::post('/enroll', 'Enrollment\CreateWebEnrollmentController@store');
Route::post('/survey', 'Survey\CreateSurveyResultController@store');

Route::get('/referral/{code}', 'Referral\CheckReferralCodeController@show')
    ->where([
        'code' => '^[a-zA-Z\d]+$',
    ]);
