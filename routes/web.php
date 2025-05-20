<?php

use Illuminate\Support\Facades\Route;

Route::get('/coba', function () {
    return view('kontraktor');
});

Route::get('/custom', function () {
    return view('custom');
});