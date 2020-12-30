<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@index');

Auth::routes();

Route::group(['middleware' => 'auth'], function () {

    Route::group(['prefix' => 'dashboard', 'middleware' => 'admin', 'namespace' => 'Dashboard'], function () {
        Route::get('/', 'DashboardController@index')->name('Dashboard');

        Route::get('/banner', 'BannerDashboardController@index')->name('banner');
        Route::get('/banner/create', 'BannerDashboardController@create')->name('banner.create');
        Route::post('/banner/store', 'BannerDashboardController@store')->name('banner.store');
        Route::get('/banner/{banner}/edit', 'BannerDashboardController@edit')->name('banner.edit');
        Route::patch('/banner/{banner}/update', 'BannerDashboardController@update')->name('banner.update');
        Route::get('/countdown', 'CountdownDashboardController@index')->name('countdown');
        Route::get('/countdown/create', 'CountdownDashboardController@create')->name('countdown.create');
        Route::post('/countdown/store', 'CountdownDashboardController@store')->name('countdown.store');
        Route::get('/countdown/{countdown}/edit', 'CountdownDashboardController@edit')->name('countdown.edit');
        Route::patch('/countdown/{countdown}/update', 'CountdownDashboardController@update')->name('countdown.update');

    });
});
