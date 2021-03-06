<?php

Route::get('/change-lang/{lang}', function($lang) {
    session()->put('locale', $lang);
    return redirect()->back();
})->name('change-lang');

Route::get('/admin', function(){
    return redirect()->route('login');
});

// Route::group(['middleware' => 'test.protection'], function () { // remove in production
    Route::namespace('Front')->group(function() {
        Route::get('/', 'SimplePageController@showHome')->name('home');
        Route::get('/mphim', 'SimplePageController@showMphim')->name('mphim');
        Route::get('/customers', 'SimplePageController@showCustomers')->name('customers');
        Route::get('/versions', 'SimplePageController@showVersions')->name('versions');
        Route::get('/commercial', 'SimplePageController@showCommercial')->name('commercial');
        Route::get('/reference', 'SimplePageController@showReference')->name('reference');
        Route::get('/press', 'SimplePageController@showPress')->name('press');
        Route::get('/management', 'SimplePageController@showManagement')->name('management');
        Route::get('/privacy-policy', 'SimplePageController@showPrivacyPolicy')->name('privacy-policy');
        Route::get('/contact', 'SimplePageController@showContact')->name('contact');
        Route::post('/contact', 'SimplePageController@postContact')->name('post.contact');

        Route::get('/academy', 'AcademyController@showIndex')->name('academy');
        Route::get('/academy/training-4-company', 'AcademyController@showCompany')->name('academy.company');
        Route::get('/academy/training-4-agent', 'AcademyController@showAgent')->name('academy.agent');
        Route::get('/academy/training-4-advisor', 'AcademyController@showAdvisor')->name('academy.advisor');
        Route::get('/academy/training-4-manager', 'AcademyController@showManager')->name('academy.manager');
    });
// });

// remove in production
// Route::get('/', function () {
//     return 'We\'re down for maintenance! Coming back soon!';
// })->name('testprotection');

Route::namespace('Admin\Auth')->prefix('admin')->group(function(){
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

Route::namespace('Admin')->prefix('admin')->middleware('auth')->group(function() {
        // Dashboard
        Route::get('/dashboard', function(){
            return view('admin.pages.dashboard');
        })->name('admin.dashboard');

        // Home
        Route::get('/home', 'OneRowPageController@showHome')->name('admin.home');
        Route::post('/home-update/{home}', 'OneRowPageController@updateHome')->name('admin.home.update');

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

        // Management
        Route::get('/management', 'OneRowPageController@showManagement')->name('admin.management');
        Route::post('/management-update/{management}', 'OneRowPageController@updateManagement')->name('admin.management.update');

        // Reference
        Route::get('/reference', 'OneRowPageController@showReference')->name('admin.reference');
        Route::post('/reference-update/{reference}', 'OneRowPageController@updateReference')->name('admin.reference.update');

        // Press
        Route::get('/press', 'OneRowPageController@showPress')->name('admin.press');
        Route::post('/press-update/{press}', 'OneRowPageController@updatePress')->name('admin.press.update');

        // Privacy Policy
        Route::get('/privacy-policy', 'OneRowPageController@showPrivacyPolicy')->name('admin.privacy-policy');
        Route::post('/privacy-policy-update', 'OneRowPageController@updatePrivacyPolicy')->name('admin.privacy-policy.update');

        // Academy
        Route::get('/academy', 'AcademyController@index')->name('admin.academy');
        Route::get('/academy/edit/{academy}', 'AcademyController@edit')->name('admin.academy.edit');
        Route::post('/academy-update/{academy}', 'AcademyController@update')->name('admin.academy.update');
        // Route::post('/academy-delete/{academy}', 'academyController@destroy')->name('admin.academys.destroy');
        
        // Logout
        Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
});