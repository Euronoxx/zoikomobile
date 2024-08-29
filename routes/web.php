<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SimplanController;
use App\Http\Controllers\PhoneController;

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

/**
 * Auth routes
 */
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('plans', [SimplanController::class, 'index'])->name('all-plans');
Route::get('editplan/{id}', [SimplanController::class, 'edit'])->name('simplan');
Route::get('phones', [PhoneController::class, 'index'])->name('phones');
Route::get('/product/{name}', [PhoneController::class, 'show'])->name('product');

/**
 * Single SIM plan page routes
 */
Route::get('zoiko-mobile-switch-save-form', [SimplanController::class, 'switchsave'])->name('switchsave');
Route::get('delete-plan/{id}', [SimplanController::class, 'destroy'])->name('delete-plan');
Route::get('offer-page', [SimplanController::class, 'offers'])->name('offer-page');