<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventoryController;

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/manage', [InventoryController::class, 'manage'])->name('manage');
Route::post('/manage', [InventoryController::class, 'store'])->name('manage.store');
Route::get('/manage/edit/{id}', [InventoryController::class, 'edit'])->name('manage.edit');
Route::post('/manage/update/{id}', [InventoryController::class, 'update'])->name('manage.update');
Route::post('/manage/delete/{id}', [InventoryController::class, 'delete'])->name('manage.delete');

Route::get('/search', [InventoryController::class, 'search'])->name('search');
