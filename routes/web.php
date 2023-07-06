<?php

use App\Http\Controllers\TernakController;
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
Route::post('/add', [TernakController::class,'store'])->name('ternak.store');
Route::get('/addit', [TernakController::class,'create'])->name('ternak.add');
Route::get('/details/{barcode}', [TernakController::class,'show'])->name('ternak.show');
 