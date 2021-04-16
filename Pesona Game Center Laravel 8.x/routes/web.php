<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
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

Auth::routes();


Route::middleware(['auth'])->group(function () {

    Route::middleware(['admin'])->group(function () {
        Route::get('admin', [AdminController::class, 'index']);
    });

    Route::middleware(['user'])->group(function () {
        Route::get('user', [UserController::class, 'index']);
        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
        Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('Profile');
        Route::get('/History', [App\Http\Controllers\HistoryController::class, 'index'])->name('History');
        Route::get('/order', [App\Http\Controllers\OrderController::class, 'index'])->name('Order');
        Route::get('/OrderInfo', [App\Http\Controllers\OrderInfoController::class, 'index'])->name('OrderInfo');
        Route::get('/Promo', [App\Http\Controllers\PromoController::class, 'index'])->name('Promo');
    });

    Route::get('/logout', function() {
        Auth::logout();
        redirect('/');
    });

});
