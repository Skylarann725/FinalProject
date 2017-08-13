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
Route::resource('/programming', 'ProgrammingController');
Route::resource('/videopro', 'VideoProController');
Route::resource('/business', 'BusinessController');
Route::resource('/photography', 'PhotographyController');
Route::resource('/ecommerce', 'EcommerceController');
Route::resource('/mobileapp', 'MobileAppController');
Route::resource('/editing', 'EditingController');

Route::group(['as' => 'user.'], function() {
    Route::get('/settings', ['as' => 'settings', 'uses' => 'ProfileController@viewSettings']);
    Route::post('/settings', ['as' => 'settings', 'uses' => 'ProfileController@saveSettings']);
    Route::any('/profile/{userId}', ['as' => 'profile', 'uses' => 'ProfileController@viewProfile']);
});