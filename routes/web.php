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
    return view('Main_Page/index');
});
Route::get('/masuk', function () {
    return view('Login_Page/login');
});
Route::get('/daftar', function () {
    return view('Login_Page/register');
});
