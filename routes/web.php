<?php

use Illuminate\Support\Facades\Route;

Route::get('/coba', function () {
    return view('kontraktor');
});
<<<<<<< HEAD

=======
Route::get('/custom', function () {
    return view('custom');
});
Route::get('/blog', function () {
    return view('blog');
});
>>>>>>> b337bb6 (tambah fitur)
Route::get('/custom', function () {
    return view('custom');
});