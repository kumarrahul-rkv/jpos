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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['web'], 'prefix' => 'member'], function(){
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('setting', 'SettingController@index')->name('setting');
    Route::post('update-setting', 'SettingController@updateSetting')->name('update-setting');
});
