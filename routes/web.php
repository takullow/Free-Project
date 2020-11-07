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
    return 'Hello, this is HP of Budy!';
});

Route::get('/top', function () {
    return view('top');
});

Route::get('/ocean_swim', function () {
    return view('ocean_swim');
});

Route::get('/kids_program', function () {
    return view('kids_program');
});

Route::get('/water_activity', function () {
    return view('water_activity');
});

Route::get('/HP_Goto_Shinya', function () {
    return view('water_activity');
});