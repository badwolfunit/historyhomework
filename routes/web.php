<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/ngeok', function () {
    return view('ngeok');
});

Route::get('/whe', function () {
    return view('whe');
});
