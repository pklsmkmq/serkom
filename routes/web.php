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
    return view('isidashboard');
})->name('dashboard');
Route::get('/tarif', function () {
    return view('tarif');
})->name('tarif');
Route::get('/addtarif', function () {
    return view('addtarif');
})->name('addtarif');