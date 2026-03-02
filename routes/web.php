<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventoryController;

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::post('/manage', [InventoryController::class, 'store'])->name('manage.store');
Route::get('/manage', [InventoryController::class, 'manage'])->name('manage');
Route::get('/search', function () {
    return view('search');
});
