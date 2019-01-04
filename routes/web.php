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
    return view('pages.home');
})->name('home');

// mphim
Route::get('/mphim', function(){
    return view('pages.mphim');
})->name('mphim');

// customers
Route::get('/customers', function () {
    return view('pages.customers');
})->name('customers');

// no dropdown
Route::get('/versions', function () {
    return view('pages.versions');
})->name('versions');

Route::get('/commercial', function () {
    return view('pages.commercial');
})->name('commercial');

Route::get('/reference', function () {
    return view('pages.reference');
})->name('reference');

// academy
Route::get('/academy', function(){
    return view('pages.academy.index');
})->name('academy');

Route::get('/academy/training-4-company', function () {
    return view('pages.academy.company');
})->name('academy.company');

Route::get('/academy/training-4-agent', function () {
    return view('pages.academy.agent');
})->name('academy.agent');

Route::get('/academy/training-4-advisor', function () {
    return view('pages.academy.advisor');
})->name('academy.advisor');

Route::get('/academy/training-4-manager', function () {
    return view('pages.academy.manager');
})->name('academy.manager');

// contact
Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');


Route::get('/change-lang/{lang}', function($lang) {

    session()->put('locale', $lang);
    return redirect()->back();

})->name('change-lang');

Route::get('/admin', function(){
    return redirect()->route('login');
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

        Route::get('/home-page', 'OneRowPageController@showHome')->name('admin.home-page');
        Route::post('/home-page/{home}', 'OneRowPageController@updateHomeText')->name('admin.home-page.update');
        Route::post('/home-page-numbers', 'OneRowPageController@updateHomeNumbers')->name('admin.home-page.updateNum');

        Route::get('/mphim', 'MphimController@index')->name('admin.mphim');
        Route::get('/mphim-edit/{text}', 'MphimController@edit')->name('admin.mphim.edit');
        Route::post('/mphim-update/{text}', 'MphimController@update')->name('admin.mphim.update');
        // Route::post('/mphim-delete/{text}', 'MphimController@destroy')->name('admin.mphim.destroy');

        Route::get('/customers', 'CustomerController@index')->name('admin.customers');
        Route::get('/customers-edit/{customer}', 'CustomerController@edit')->name('admin.customers.edit');
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
        
        // Logout
        Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
});