<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/surat', function (Request $request) {
    return $request->user();
});
Route::resource('suratmasuk','SuratApiController');
Route::post('suratmasuk/changedisposisi','SuratApiController@disposisi');
Route::get('tampildisposisi','SuratApiController@showdisposisi');