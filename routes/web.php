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
Route::get('/search', function () {
    return view('search');
});

Route::get('/', function () {
    return view('frontend/home');
});
Route::get('/kabar_terkini', function () {
    return view('frontend/kabar_terkini');
});
Route::get('/ide_liburan', function () {
    return view('frontend/ide_liburan');
});
Route::get('/akomodasi', function () {
    return view('frontend/akomodasi');
});
Route::get('/transportasi', function () {
    return view('frontend/transportasi');
});
Route::get('/agenda', function () {
    return view('frontend/agenda');
});
Route::get('/saran_kritik', function () {
    return view('frontend/saran_kritik');
});

//welcome
Route::get('/putu', function () {
    return view('welcome');
});


