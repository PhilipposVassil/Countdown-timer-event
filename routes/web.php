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
        Route::get('/', 'DashboardController@index')->name('dashboard');

        Route::get('/events', 'EventsDashboardController@index')->name('events');
        Route::get('/events/create', 'EventsDashboardController@create')->name('events.create');
        Route::post('/events/store', 'EventsDashboardController@store')->name('events.store');
        Route::get('/events/{events}/edit', 'EventsDashboardController@edit')->name('events.edit');
        Route::patch('/events/{events}/update', 'EventsDashboardController@update')->name('events.update');
    });
});
