<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/manage', function () {
    return view('manage');
});
Route::get('/search', function () {
    return view('search');
});
