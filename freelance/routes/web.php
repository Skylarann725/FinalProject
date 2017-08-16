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
Route::resource('/ecommerce', 'EcommerceController');
Route::resource('/wordpress', 'WordpressController');
Route::resource('/logodesign', 'LogoDesignController');
Route::resource('/mobileapp', 'MobileAppController');
Route::resource('/databases', 'DatabasesController');
Route::resource('/desktop', 'DesktopController');
Route::resource('/qa', 'QAController');
Route::resource('/testing', 'TestingController');
Route::resource('/editing', 'EditingController');
Route::resource('/videopro', 'VideoProController');
Route::resource('/musicvid', 'MusicVidController');
Route::resource('/interview', 'InterviewController');
Route::resource('/underwatervid', 'UnderwaterVidController');
Route::resource('/event', 'EventController');
Route::resource('/weddingvid', 'WeddingVidController');
Route::resource('/finance', 'FinanceController');
Route::resource('/accounting', 'AccountingController');
Route::resource('/legalconsult', 'LegalConsultController');
Route::resource('/presentations', 'PresentationsController');
Route::resource('/branding', 'BrandingController');
Route::resource('/analysts', 'AnalystsController');
Route::resource('/taxprep', 'TaxPrepController');
Route::resource('/nature', 'NatureController');
Route::resource('/weddingphoto', 'WeddingPhotoController');
Route::resource('/underwaterphoto', 'UnderwaterPhotoController');
Route::resource('/photoediting', 'PhotoEditingController');
Route::resource('/models', 'ModelsController');
Route::resource('/content', 'ContentController');
Route::resource('/editors', 'EditorsController');
Route::resource('/businesswriters', 'BusinessWritersController');
Route::resource('/screenwriters', 'ScreenwritersController');
Route::resource('/academicwriters', 'AcademicWritersController');
Route::resource('/creativewriters', 'CreativeWritersController');
Route::resource('/journalists', 'JournalistsController');
Route::resource('/translators', 'TranslatorsController');
Route::resource('/voice', 'VoiceController');
Route::resource('/piano', 'PianoController');
Route::resource('/guitar', 'GuitarController');
Route::resource('/songwriters', 'SongwritersController');
Route::resource('/soundeffects', 'SoundEffectsController');
Route::resource('/voiceovers', 'VoiceOversController');
Route::resource('/singers', 'SingersController');
Route::resource('/mixing', 'MixingController');


Route::group(['as' => 'user.'], function() {
    Route::get('/settings', ['as' => 'settings', 'uses' => 'ProfileController@viewSettings']);
    Route::post('/settings', ['as' => 'settings', 'uses' => 'ProfileController@saveSettings']);
    Route::any('/profile/{userId}', ['as' => 'profile', 'uses' => 'ProfileController@viewProfile']);
});