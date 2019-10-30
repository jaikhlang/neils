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
    return view('pages.index');
});

Route::get('/', 'PageController@index')->name('pages.index');
Route::get('/neils', 'PageController@neils')->name('pages.neils');
Route::get('/paper', 'PageController@paper')->name('pages.paper');
Route::get('/about', 'PageController@about')->name('pages.about');
Route::get('/contact', 'PageController@contact')->name('pages.contact');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
