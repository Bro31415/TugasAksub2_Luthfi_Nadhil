<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventoryController;


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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', [InventoryController::class, 'index']);
Route::prefix('inv')->group(function() {
    Route::get('/add', [InventoryController::class, 'addItem'])->name('item.add');
    Route::get('/{id}/edit', [InventoryController::class, 'editItem'])->name('item.edit');
    Route::post('/create', [InventoryController::class, 'createEntry'])->name('item.create');
    Route::patch('/{id}/update', [InventoryController::class, 'updateEntry'])->name('item.update');
    Route::delete('/{id}/delete', [InventoryController::class, 'deleteEntry'])->name('item.delete');
});