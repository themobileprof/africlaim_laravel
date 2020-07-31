<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
	return redirect('/website');
});



// Auth Routes
Route::get('/login/{claim}', function ($claim) {
	return redirect()->route('login', ['claim' => $claim]);
});

Route::get('/register/{claim}', function ($claim) {
	return redirect()->route('register', ['claim' => $claim]);
});

Auth::routes();





// Dashboards
Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');






// Routes for database prepopulation
//Route::get('db/seeder', 'SeedingController@index')->name('db.seeder');



// Claims Routes
Route::post('/claim/processor', 'ClaimController@store')->name('process');
Route::get('/claim/{Claim}', 'ClaimController@show')->name('show.claim');
Route::get('/claim/delete/{Claim}', 'ClaimController@destroy')->name('delete.claim');
Route::get('/eligibility/{Claim}', 'ClaimController@editEligibility')->name('eligibility')->middleware('is_admin');



// VERIFY CLAIM
Route::get('/verify', 'VerificationController@index')->name('verify.claims'); // Latest 100 entries
Route::get('/verify_claim/{Claim}', 'VerificationController@verifyOne')->name('verify.claim');


// CLAIMS DOCUMENT
Route::get('/document', 'DocumentController@index')->name('document.index');
Route::get('/document/{Claim}', 'DocumentController@create')->name('document.create');
Route::post('/document', 'DocumentController@store')->name('document.store');
Route::get('/document/delete/{document}', 'DocumentController@destroy')->name('document.delete');


// JURISDICTION
Route::get('/jurisdiction/{Claim}', 'JurisdictionController@create')->name('jurisdiction.create');
Route::post('/jurisdiction', 'JurisdictionController@store')->name('jurisdiction.store');



// Vue Route
Route::get('/claims/{any}', function () {
	return view('claims');
})->where('any', '.*');





// Get blank
Route::get('/blank', function () {
	return view('blank');
});


// Route for testing
Route::get('/test', function () {
	return view('formtest');
});


//Route::get('/test/{claim}', 'ClaimController@tester');






// Test Mail
Route::get('send-mail', 'ClaimController@sendMail');
