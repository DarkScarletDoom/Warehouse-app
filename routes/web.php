<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

Route::group(['prefix' => 'category'], function() {
    Route::post('/', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/{category_id}', [CategoryController::class, 'getOne'])->whereUuid('category_id')->name('category.getone');
    Route::get('/', [CategoryController::class, 'getList'])->whereUuid('category_id')->name('category.getlist');
    Route::patch('/{category_id}', [CategoryController::class, 'update'])->whereUuid('category_id')->name('category.update');
    Route::delete('/{category_id}', [CategoryController::class, 'delete'])->whereUuid('category_id')->name('category.delete');
});
