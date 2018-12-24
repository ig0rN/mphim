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
Route::get('/mphim/what-is', function () {
    return view('pages.mphim.whatIs');
})->name('mphim.whatIs');

Route::get('/mphim/what-does', function () {
    return view('pages.mphim.whatDoes');
})->name('mphim.whatDoes');

Route::get('/mphim/why-to-have-it', function () {
    return view('pages.mphim.whyTo');
})->name('mphim.whyTo');

Route::get('/mphim/roadmap', function () {
    return view('pages.mphim.roadmap');
})->name('mphim.roadmap');

// customers
Route::get('/customers/companies', function () {
    return view('pages.customers.companies');
})->name('customers.companies');

Route::get('/customers/professionals', function () {
    return view('pages.customers.professionals');
})->name('customers.pro');

Route::get('/customers/trade-associations', function () {
    return view('pages.customers.tradeAssoc');
})->name('customers.tradeAssoc');

Route::get('/customers/public-institutions', function () {
    return view('pages.customers.publicInsti');
})->name('customers.publicInsti');

Route::get('/customers/schools', function () {
    return view('pages.customers.schools');
})->name('customers.schools');

Route::get('/customers/university', function () {
    return view('pages.customers.university');
})->name('customers.university');

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
Route::get('/academy/training-4-company', function () {
    return view('pages.academy.company');
})->name('academy.company');

Route::get('/academy/training-4-agent', function () {
    return view('pages.academy.agent');
})->name('academy.agent');

Route::get('/academy/training-4-advisior', function () {
    return view('pages.academy.advisior');
})->name('academy.advisior');

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
        
        // Logout
        Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
});