<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// ROUTE FOR AIRLINES API
Route::get('/airlines/{search?}', 'api\AirlineController@index');
Route::get('/airline/{airline}', 'api\AirlineController@show');

// ROUTE FOR AIRPORT API
Route::get('/airports/{search?}', 'api\AirportController@index');
Route::get('/airport/{airport}', 'api\AirportController@show');
