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

Route::middleware('auth.basic')->get('/user', function (Request $request) {
    return $request->user();
});

// Declare User and Message routes
Route::apiResource('users', 'API\UserController')->middleware('auth.basic');
Route::apiResource('messages', 'API\MessageController')->middleware('auth.basic');
