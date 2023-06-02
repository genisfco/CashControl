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
    return view('welcome');
});
Route::get('/registerU', function () {
    return view('registerUser');
});
Route::get('/registerE', function () {
    return view('registerEarnedValue');
});
Route::get('/registerA', function () {
    return view('registerAmountSpent');
});
Route::get('/menu', function () {
    return view('menu');
});
Route::get('/extract', function () {
    return view('extract');
});