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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', 'MainController@getIndex')->name('home');
// Route::get('#about', 'MainController@getAbout')->name('about');
// Route::get('#goals', 'MainController@getGoals')->name('goals');
// Route::get('#portfoilo', 'MainController@getPortfolio')->name('portfolio');
Route::post('/', 'MainController@contact')->name('contact');