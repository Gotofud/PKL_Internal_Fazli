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
// Route::get('siswa',[SiswaController::class,'index'])->name('siswa.index');
// Route::get('siswa/create',[SiswaController::class, 'create'])->name('siswa.create');
// Route::post('siswa/store',[SiswaController::class,'store'])->name('siswa.store');
// Route::get('siswa/edit/'[$id],[SiswaController::class,'edit'])->name('siswa.edit');
// Route::put('siswa/update/'[$id],[SiswaController::class, 'update'])->name('siswa.update');
// Route::delete('siswa/'[$id], [SiswaController::class, 'destroy'])->name('siswa.destroy')

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
