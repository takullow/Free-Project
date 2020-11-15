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
})->name('index');

Route::get('/top', function () {
    return view('top');
})->name('top');

Route::get('/ocean_swim', function () {
    return view('ocean_swim');
})->name('ocean_swim');

Route::get('/kids_programs', function () {
    return view('kids_programs');
})->name('kids_programs');

Route::get('/water_activity', function () {
    return view('water_activity');
})->name('water_activity');

Route::get('/HP_Goto_Shinya', function () {
    return view('HP_Goto_Shinya');
})->name('HP_Goto_Shinya');