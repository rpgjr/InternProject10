<?php

use App\Http\Controllers\Menu\ItemController;
use App\Http\Controllers\Menu\MenuController;
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

// Menu - Pages
Route::controller(MenuController::class)
    ->name('menu.')
    ->group(function() {
        Route::get('/', 'getMenuHome')->name('getMenuHome');
});

Route::controller(ItemController::class)
    ->name('item.')
    ->group(function() {
        Route::post('item/add-item', 'addItem')->name('addItem');
        Route::post('item/edit-item', 'editItem')->name('editItem');
        Route::post('item/delete-item', 'deleteItem')->name('deleteItem');
});
