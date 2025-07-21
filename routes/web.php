<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('general');
});
Route::get('/about', function () {
    return view('about');
});
