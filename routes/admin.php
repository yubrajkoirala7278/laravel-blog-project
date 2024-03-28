<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

// ===========dashboard=============
Route::get('/dashboard',[HomeController::class,'index'])->name('admin.dashboard');
// ================================

// ========posts==================
Route::resources([
    'posts'=>PostController::class,
    'category'=>CategoryController::class,
    'tag'=>TagController::class,
]);
// ===============================