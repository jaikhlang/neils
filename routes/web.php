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

Auth::routes(['verify' => true, 'middleware' => 'veriied']);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
Route::get('/apply', 'ParticipantController@apply')->name('apply');
Route::put('/apply/{user}', 'ParticipantController@store')->name('participant.store');
Route::get('/apply/{user}/edit', 'ParticipantController@edit')->name('participant.edit');
Route::get('/apply/view/{user}', 'ParticipantController@show')->name('participant.show');
Route::put('/update/{user}', 'ParticipantController@update')->name('participant.update');
Route::get('/apply/billing', 'ParticipantController@billing')->name('participant.billing');



//Managements
Route::group(['prefix' => 'manages'], function(){
  Route::get('/', 'ManageController@index')->name('manages.index');
});
