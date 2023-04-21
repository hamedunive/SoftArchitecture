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
    return redirect()->route('loginDeveloper');
});


Route::group(['prefix'=>'developers'],function(){
    Route::get('register','DevelopersController@register')->name('registerDeveloper');
    Route::post('register','DevelopersController@doregister')->name('doregisterDeveloper');
    Route::get('login','DevelopersController@login')->name('loginDeveloper');
    Route::post('login','DevelopersController@dologin');

    Route::get('dashboard','DevelopersController@dashboard')->name('developerDashboard')->middleware('auth');
    Route::get('logout','DevelopersController@logout')->name('logoutDeveloper')->middleware('auth');
    Route::get('profile','DevelopersController@profile')->name('profileDeveloper')->middleware('auth');
    Route::post('profile','DevelopersController@profileUpdate')->middleware('auth');

    Route::get('topics/{category}','DevelopersController@topic')->name('topic')->middleware('auth');
    Route::get('challange/{id}','DevelopersController@challange')->name('challange')->middleware('auth');
    Route::post('challange/{id}','DevelopersController@dochallange')->middleware('auth');
    Route::get('action','DevelopersController@action')->name('action')->middleware('auth');

});
