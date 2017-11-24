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


Route::get('/reports', 'ReportController@reports');
Route::get('/statistics', 'ReportController@statisitics');

Route::post('/receive-trafficking-report','ReportController@receive_trafficking_report');

Route::get('reports/getallreports', 'ReportController@getReports')->name('reports/getallreports');

Route::get('reports/getvictimreports', 'ReportController@getVictimReports')->name('reports/getvictimreports');

Route::get('reports/getwhistlereports', 'ReportController@getWhistleReports')->name('reports/getwhistlereports');

// Route::resource('/', function () {
//     return view('welcome');
// });

// Route::resource('/','ReportingController');


// Route::resource('/','ContactController');
Route::resource('/', 'ReportController');
Route::get('/victims-messages','PagesController@victimsMessage');


//Route::resource('/', '\App\Http\Controllers\ContactController');



Route::post('/receive-trafficking-report','ReportController@receive_trafficking_report');

