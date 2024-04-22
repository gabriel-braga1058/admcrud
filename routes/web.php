<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth', 'admin')->group(function () {

    Route::get('admin/dashboard', [HomeController::class,'index']);

    Route::get('/admin/products', [ProductController::class,'index'])->name('admin/products');
    Route::get('admin/products/create', [ProductController::class,'create'])->name('admin/products/create');
    Route::post('admin/products/save', [ProductController::class,'save'])->name('admin/products/save');
    Route::get('admin/products/edit/{id}', [ProductController::class,'edit'])->name('admin/products/edit');






   
});

require __DIR__.'/auth.php';


