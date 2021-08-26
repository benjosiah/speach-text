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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/diaries','App\Http\Controllers\DiaryController@index');
Route::post('/diary','App\Http\Controllers\DiaryController@store');
Route::patch('/diary/{note}','App\Http\Controllers\DiaryController@update');
Route::delete('/diary/{note}','App\Http\Controllers\DiaryController@destroy');
// Route::post('/logout','App\Http\Controllers\UserController@logout');
