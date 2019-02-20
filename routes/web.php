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
Route::get('/change-lang/{lang}', function($lang) {
    session()->put('locale', $lang);
    return redirect()->back();
})->name('change-lang');

Route::get('/admin', function(){
    return redirect()->route('login');
});

Route::namespace('Front')
    ->group(function(){

    Route::get('/', 'SimplePageController@showHome')->name('home');
    Route::get('/mphim', 'SimplePageController@showMphim')->name('mphim');
    Route::get('/customers', 'SimplePageController@showCustomers')->name('customers');
    Route::get('/versions', 'SimplePageController@showVersions')->name('versions');
    Route::get('/commercial', 'SimplePageController@showCommercial')->name('commercial');
    Route::get('/reference', 'SimplePageController@showReference')->name('reference');
    Route::get('/contact', 'SimplePageController@showContact')->name('contact');

    Route::get('/academy', 'AcademyController@showIndex')->name('academy');
    Route::get('/academy/training-4-company', 'AcademyController@showCompany')->name('academy.company');
    Route::get('/academy/training-4-agent', 'AcademyController@showAgent')->name('academy.agent');
    Route::get('/academy/training-4-advisor', 'AcademyController@showAdvisor')->name('academy.advisor');
    Route::get('/academy/training-4-manager', 'AcademyController@showManager')->name('academy.manager');

});

Route::namespace('Admin\Auth')
    ->prefix('admin')
    ->group(function(){

    Route::get('login', 'LoginController@showLoginForm')->name('login');
    Route::post('login', 'LoginController@login');

    // Registration Routes...
    // Route::get('register', 'RegisterController@showRegistrationForm')->name('register');
    // Route::post('register', 'RegisterController@register');

    // Password Reset Routes...
    Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset', 'ResetPasswordController@reset')->name('password.update');

    // Email Verification Routes...
    // Route::get('email/verify', 'VerificationController@show')->name('verification.notice');
    // Route::get('email/verify/{id}', 'VerificationController@verify')->name('verification.verify');
    // Route::get('email/resend', 'VerificationController@resend')->name('verification.resend');
    

});

Route::namespace('Admin')
    ->prefix('admin')
    ->middleware('auth')
    ->group(function(){

        Route::get('/home', function(){
            return view('admin.pages.home');
        })->name('admin.home');

        Route::get('/quotes', 'QuoteController@index')->name('admin.quotes');
        Route::get('/quote/create', 'QuoteController@create')->name('admin.quote.create');
        Route::post('/quote/store', 'QuoteController@store')->name('admin.quote.store');
        Route::get('/quote/edit/{quote}', 'QuoteController@edit')->name('admin.quote.edit');
        Route::post('/quote-update/{quote}', 'QuoteController@update')->name('admin.quote.update');
        Route::post('/quote-delete/{quote}', 'QuoteController@destroy')->name('admin.quote.destroy');

        Route::get('/mphim', 'MphimController@index')->name('admin.mphim');
        Route::get('/mphim/edit/{text}', 'MphimController@edit')->name('admin.mphim.edit');
        Route::post('/mphim-update/{text}', 'MphimController@update')->name('admin.mphim.update');
        // Route::post('/mphim-delete/{text}', 'MphimController@destroy')->name('admin.mphim.destroy');

        Route::resource('/roadmap', 'RoadMapController', ['as' => 'admin'])->except(['show']);

        Route::get('/customers', 'CustomerController@index')->name('admin.customers');
        Route::get('/customers/edit/{customer}', 'CustomerController@edit')->name('admin.customers.edit');
        Route::post('/customers-update/{customer}', 'CustomerController@update')->name('admin.customers.update');
        // Route::post('/customer-delete/{customer}', 'CustomerController@destroy')->name('admin.customers.destroy');

        // Versions
        Route::get('/versions', 'OneRowPageController@showVersions')->name('admin.versions');
        Route::post('/versions-update/{versions}', 'OneRowPageController@updateVersions')->name('admin.versions.update');

        // Commercial
        Route::get('/commercial', 'OneRowPageController@showCommercial')->name('admin.commercial');
        Route::post('/commercial-update/{commercial}', 'OneRowPageController@updateCommercial')->name('admin.commercial.update');

        // Reference
        Route::get('/reference', 'OneRowPageController@showReference')->name('admin.reference');
        Route::post('/reference-update/{reference}', 'OneRowPageController@updateReference')->name('admin.reference.update');

        // Academy
        Route::get('/academy', 'AcademyController@index')->name('admin.academy');
        Route::get('/academy/edit/{academy}', 'AcademyController@edit')->name('admin.academy.edit');
        Route::post('/academy-update/{academy}', 'AcademyController@update')->name('admin.academy.update');
        // Route::post('/academy-delete/{academy}', 'academyController@destroy')->name('admin.academys.destroy');
        
        // Logout
        Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
});