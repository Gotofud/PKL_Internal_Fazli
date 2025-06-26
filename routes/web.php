<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EcommerceController;
use App\Http\Controllers\LatihanController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SiswaController;
use App\Http\Middleware\isAdmin;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

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

// Test Template
Route::get('/testing', function () {
    return view('layouts.admin');
});

Route::get('latihan-js', function () {
    return view('latihan-js');
});

// Admin Routes
Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
    'middleware' => ['auth', isAdmin::class]
], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('category', CategoryController::class);
    Route::resource('product', ProductController::class);
});

Route::get('/', [EcommerceController::class, 'index'])->name('home');
Route::group([
    'middleware' => ['auth']
], function(){
    Route::post('/order',[EcommerceController::class,'createOrder'])->name('order.create');
    Route::post('/checkout',[EcommerceController::class,'checkOut'])->name('checkout');
    Route::get('/my-orders',[EcommerceController::class,'myOrders'])->name('orders.my');
    Route::get('/my-orders/{id}',[EcommerceController::class,'orderDetail'])->name('orders.detail');
    Route::post('order/update-quantity',[EcommerceController::class,'updateQuantity'])->name('order.update-quantity');
    Route::post('/order/remove-item',[EcommerceController::class,'removeItem'])->name('order.remove-item');
});