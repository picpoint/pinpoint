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



Route::group(['middleware' => 'registered'], function() {
    Route::match(['get', 'post'], '/personalpage', 'CreatePinController@index')->name('personalpage');
    Route::resource('/pp', 'CreatePinController');
    Route::resource('/pins', 'PinController');
    Route::resource('/news', 'NewsController');
    Route::get('/freinds', 'FreindController@index')->name('freinds');
    Route::post('/freinds/{id}', 'FreindController@addToFreind')->name('add.freind');
    Route::get('/search', 'SearchPageController@index')->name('search');
    Route::post('/search', 'SearchPageController@search');
    Route::get('/messages', 'MessageController@index')->name('messages');
    Route::get('/messages/{id}', 'MessageController@writeMessageForm')->name('messages.id');
    Route::post('/messages/{id}', 'MessageController@writeMessageToUser')->name('msgto');
    Route::get('/settings', 'SettingsController@index')->name('settings');
    Route::post('/settings', 'SettingsController@changeAvatar')->name('changeavatar');
    Route::post('/sharepin', 'SharePinController@sharePin')->name('sharepin');
});



Route::get('/', 'HomeController@index')->name('home');

Route::get('/registration', 'UserController@create')->name('registration.create');
Route::post('/registration', 'UserController@store')->name('registration.store');
Route::get('/login', 'UserController@loginForm')->name('login.create');
Route::post('/login', 'UserController@login')->name('login');

Route::get('/logout', 'UserController@logout')->name('logout')->middleware('auth');

