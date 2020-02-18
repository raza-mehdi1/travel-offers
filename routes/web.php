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

Route::get('/change-locale/{locale}', 'LocaleController@handle')
    ->name('change-locale');

Route::get('/', 'FrontendController@index')->name('index');
Route::get('/details/{slug}', 'FrontendController@details')->name('details');
Route::post('/booking-details/{slug}', 'FrontendController@bookingDetails')->name('booking-details');
Route::post('/book/{slug}', 'FrontendController@book')->name('book');
Route::post('/checkout', 'FrontendController@checkout')->name('checkout');
Route::get('/confirmed/{booking_id}', 'FrontendController@confirmed')->name('confirmed');
Route::get('/pages/{slug}', 'PagesController@page')->name('page');
Route::get('/contact-us', 'PagesController@contactUs')->name('contact-us-form');
Route::post('/contact-us', 'PagesController@sendContactUsEmail')->name('contact-us-email');

Auth::routes();

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('packages', 'PackagesController');
    Route::resource('pages', 'PagesController');
    Route::resource('itineraries', 'ItinerariesController');
    Route::resource('itinerary_features', 'ItineraryFeaturesController');
    Route::resource('features', 'FeatureController');
    Route::resource('addons', 'AddonsController');
    Route::resource('images', 'ImagesController');
});
