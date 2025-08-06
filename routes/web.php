<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\BlogController;

Route::get('/', function () {
    return view('general');
});
Route::get('/about', function () {
    return view('about');
});

Route::get('/personal', [PersonalController::class, 'index']);
Route::get('/blog', [BlogController::class, 'index']);
