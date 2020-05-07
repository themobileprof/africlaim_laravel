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
	return view('welcome');
});

Route::get('/register/{claim}', function ($claim) {
	return redirect()->route('register', ['claim' => $claim]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');


// Routes for database prepopulation
//Route::get('db/seeder', 'SeedingController@index')->name('db.seeder');


Route::post('/claim/processor', 'ClaimController@store')->name('process');

Route::get('/claims/{any}', function () {
	return view('claims');
})->where('any', '.*');

Route::get('/test', function () {
	return view('formtest');
});
