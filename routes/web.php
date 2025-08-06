<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

// Halaman utama
Route::get('/', [BrandController::class, 'index']);

// Kategori
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/{slug}', [CategoryController::class, 'show'])->name('categories.show');

// Brands
Route::get('/brands/{slug}', [BrandController::class, 'show'])->name('brands.show');
// Jangan pakai resource untuk brands jika sudah pakai custom route di atas
// Route::resource('brands', BrandController::class); <-- hapus atau nonaktifkan jika tidak perlu semua method

// Products (CRUD)
Route::resource('products', ProductController::class);
