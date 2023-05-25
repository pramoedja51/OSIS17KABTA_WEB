<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('halaman_utama/index');
});
Route::get('/masuk', function () {
    return view('halaman_login/masuk');
});
Route::get('/daftar', function () {
    return view('halaman_login/daftar');
});
