<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/register', function () {
    return view('register');
});
Route::get('/speech', function () {
    return view('speech');
})->name('speech');

Route::post('/login','App\Http\Controllers\AuthController@login')->name('login');
Route::post('/diary','App\Http\Controllers\DiaryController@store')->name('speech.store');
Route::get('/notes','App\Http\Controllers\DiaryController@index')->name('diary.index');