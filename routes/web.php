<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Frontend\CategoryController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ReadmoreController;
use App\Http\Controllers\Frontend\TagController;
use Illuminate\Support\Facades\Route;

// ============frontend================
// home-page
Route::get('/',[HomeController::class,'index'])->name('frontend.index');
Route::get('/read-more/{post}',[ReadmoreController::class,'index'])->name('frontend.read-more');
Route::get('/category/{category}',[CategoryController::class,'index'])->name('frontend.category');
Route::get('/tag/{tag}',[TagController::class,'index'])->name('frontend.tag');


// ============admin dashboard============
Route::group(['middleware'=>['web','checkAdmin']],function(){
    Route::prefix('admin')->group(function(){
        require __DIR__.'/admin.php';
    });
});

// ============Auth==========================
// login admin
Route::get('/login',[AuthController::class,'loadLogin']);
Route::post('/login',[AuthController::class,'adminLogin'])->name('admin.login');

// logout admin
Route::get('/logout',[AuthController::class,'logout'])->name('logout');

// forget password
Route::get('/forget-password',[AuthController::class,'forgetPasswordLoad']);
Route::post('/forget-password',[AuthController::class,'forgetPassword'])->name('forgetPassword');

// reset password
Route::get('/reset-password',[AuthController::class,'resetPasswordLoad']);
Route::post('/reset-password',[AuthController::class,'resetPassword'])->name('resetPassword');

// ==========================================