<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\api\ApiInventoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('inventory')->group(function() {
    Route::get('/', [InventoryController::class, 'showAll'])->name('inventory.show');
    Route::get('/categorized/{name}', [InventoryController::class, 'showCategorized'])->name('inventory.categorized');
    Route::get('/get', [ApiInventoryController::class, 'getItems'])->name('inventory.get');
    Route::get('/get/{name}', [ApiInventoryController::class, 'getCategorizedItems'])->name('inventory.categorized');
});

// Route::get('/', [CategoryController::class, 'showAllCategory'])->name('categories.show');
