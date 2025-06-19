<?php

use App\Http\Controllers\LatihanController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route Dasar
Route::get('sample', function () {
    return 'Halo Dunia!';
});

// Route dengan view
Route::get('sample2', function () {
    return view('sample2');
});

// Route dengan R-C-V
Route::get('sample3', [LatihanController::class, 'index']);

// Route::get('/siswa', [SiswaController::class, 'index']);
Route::get('/orangtua', [SiswaController::class, 'ortu']);
Route::resource('siswa', SiswaController::class);
