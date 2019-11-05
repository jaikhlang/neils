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

Route::group(['middleware' => ['auth','verified', 'role:participant']], function(){
  Route::get('/home', 'HomeController@index')->name('home');
  Route::get('/apply', 'ParticipantController@apply')->name('apply');
  Route::put('/apply/{user}', 'ParticipantController@store')->name('participant.store');
  Route::get('/apply/{user}/edit', 'ParticipantController@edit')->name('participant.edit');
  Route::get('/apply/view/{user}', 'ParticipantController@show')->name('participant.show');
  Route::post('/update', 'ParticipantController@update')->name('participant.update');
  Route::post('/apply/confirm', 'ParticipantController@confirm')->name('participant.confirm');
  Route::get('/application/view', 'ParticipantController@application')->name('application.show');
  Route::get('/apply/billing', 'ParticipantController@billing')->name('participant.billing');
  Route::post('payment', 'PaymentController@pay')->name('payment.pay');
  Route::get('payment/response', 'PaymentController@response')->name('payment.response');
  Route::get('payment/success', 'PaymentController@success')->name('payment.success');
  Route::get('payment/failure', 'PaymentController@failure')->name('payment.failure');
});

Route::any('webhook', 'PaymentController@webhook')->name('payment.webhook');
Route::get('/generate/application/{id}','ParticipantController@generatePdf')->name('generate.application');
Route::get('/generate/{id}/invoice','ParticipantController@generateInvoice')->name('generate.invoice');

Route::get('/print-pdf', function(){
  return view('pdf');
});

Route::get('/admin', function(){
  return redirect()->route('manages.index');
});

//Managements
Route::group(['prefix' => 'manages', 'middleware' => ['role:admin|superadmin']], function(){
  Route::get('/', 'ManageController@index')->name('manages.index');
  Route::get('/participants', 'ManageController@participants')->name('manages.participants');
  Route::get('/payments', 'ManageController@payments')->name('manages.payments');
});
