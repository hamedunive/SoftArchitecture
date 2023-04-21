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
    return redirect()->route('loginCompany');
});

Route::group(['prefix' => 'companies'],function(){
    Route::get('register','CompaniesController@register')->name('registerCompany');
    Route::post('register','CompaniesController@doregister')->name('doregisterCompany');
    Route::get('login','CompaniesController@login')->name('loginCompany');
    Route::post('login','CompaniesController@dologin')->name('dologinCompany');
    Route::get('dashboard','CompaniesController@dashboard')->name('companyDashboard')->middleware('auth');
    Route::get('logout','CompaniesController@logout')->name('logoutCompany')->middleware('auth');
    Route::get('profile','CompaniesController@profile')->name('profileCompany')->middleware('auth');
    Route::post('profile','CompaniesController@profileUpdate')->middleware('auth');
});
