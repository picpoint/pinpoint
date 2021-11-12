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



Route::group(['middleware' => 'notregistered'], function() {
    Route::match(['get', 'post'], '/personalpage', 'CreatePinController@index')->name('personalpage');
    Route::resource('/pp', 'CreatePinController');
    Route::resource('/freinds', 'FreindController');
    Route::get('/searchfreind', 'SearchFreindController@search')->name('searchfreind');
});



Route::get('/', 'HomeController@index')->name('home');

Route::get('/registration', 'UserController@create')->name('registration.create');
Route::post('/registration', 'UserController@store')->name('registration.store');
Route::get('/login', 'UserController@loginForm')->name('login.create');
Route::post('/login', 'UserController@login')->name('login');

Route::get('/logout', 'UserController@logout')->name('logout')->middleware('auth');

