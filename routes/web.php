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
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('user.dashboard');

Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');

Auth::routes();

// Admin
Route::prefix('admin')->name('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('.login.submit');
    Route::get('/dashboard', 'Admin\DashboardController@show')->name('.dashboard');
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('.logout');

    // Password Reset
    Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('.password.email');
    Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('.password.request');
    Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
    Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('.password.reset');
});
