<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TarifController;
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

Route::get('/tarif', [TarifController::class, "index"])->name('tarif');

Route::get('/addtarif', function () {
    return view('addtarif');
})->name('addtarif');

Route::post('/savetarif', [TarifController::class, "store"])->name('savetarif');