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

Route::get('/','RoutesController@home')->name('home');

Route::get('/corso','RoutesController@corso')->name('corso');

Route::get('/carriere','RoutesController@carriere')->name('carriere');

Route::get('/lezione-gratuita','RoutesController@lezionegratuita')->name('lezione-gratuita');

Route::get('/iscriviti','RoutesController@iscriviti')->name('iscriviti');
