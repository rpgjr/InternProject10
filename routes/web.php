<?php

use App\Http\Controllers\MenuController;
use App\Http\Controllers\OrderController;
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

// Menu
Route::controller(MenuController::class)
    ->name('menu.')
    ->group(function() {
        Route::get('/', 'getMenuHome')->name('getMenuHome');
});

Route::controller(OrderController::class)
    ->name('order.')
    ->group(function() {
        Route::get('/order', 'getOrderHome')->name('getOrderHome');
});
