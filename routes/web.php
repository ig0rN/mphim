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
    return view('master');
});

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