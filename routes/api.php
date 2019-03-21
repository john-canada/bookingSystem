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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/exams', 'examController@index');
// Route::post('/exam', 'examController@store');

Route::get('/answers', 'answerController@index');
// Route::post('/answer', 'answerController@store');


Route::post('/answer', 'answerController@store');
// Route::post('/answer', 'answerController@store');

Route::get('/examiners', 'examinerController@index');
// Route::post('/answer', 'answerController@store');

Route::post('/examiner', 'examinerController@store');
// Route::post('/answer', 'answerController@store');

Route::get('/customers', 'customerLeadController@index');
Route::post('/customer', 'customerLeadController@store');
