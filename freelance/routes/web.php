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

Route::get('/', 'ServicesController@index');

Auth::routes();

Route::get('/home', 'ServicesController@index')->name('home');

Route::resource('/services', 'ServicesController');

Route::group(['as' => 'user.'], function() {
    Route::get('/settings', ['as' => 'settings', 'uses' => 'ProfileController@viewSettings']);
    Route::post('/settings', ['as' => 'settings', 'uses' => 'ProfileController@viewSettings']);
    Route::any('/profile/{userId}', ['as' => 'profile', 'uses' => 'ProfileController@viewProfile']);
});