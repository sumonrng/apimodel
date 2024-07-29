<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\PostController;
use App\Http\Controllers\admin\AdminController;
// use App\Http\Controllers\Gateway\PaymentController;
// use PrevailExcel\Nowpayments\Http\Controllers\DashboardController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::post('index',[AuthController::class,'index']);
Route::post('signup',[AuthController::class,'signup'])->name('signup');
Route::post('login',[AuthController::class,'login'])->name('login');
Route::post('logout',[AuthController::class,'logout'])->middleware('auth:sanctum');

Route::get('post',[PostController::class,'index']);

Route::get('index',[AdminController::class,'index']);
// Route::get('login',[AdminController::class,'index'])->name('login');
Route::get('register',[AdminController::class,'register'])->name('register');
Route::post('save',[AdminController::class,'store'])->name('save');

Route::get('user',[UserController::class,'index']);
// Route::resource('user', UserController::class);

// Route::get('/deposit',[PaymentController::class,'deposit']);
// Route::get('/create',[PaymentController::class,'create']);