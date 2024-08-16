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
Route::get('index',[AuthController::class,'index']);
Route::post('signup',[AuthController::class,'signup'])->name('signup');
Route::post('login',[AuthController::class,'login'])->name('login');

// Route::get('post',[PostController::class,'index']);

Route::middleware('auth:sanctum')->group(function(){
    Route::apiResource('posts',PostController::class);
    Route::post('logout',[AuthController::class,'logout'])->name('logout');
});


Route::get('allpost',[PostController::class,'allpost'])->name('allpost');




Route::get('index',[AdminController::class,'index']);
Route::get('login',[AuthController::class,'loginView'])->name('loginView');
Route::get('register',[AdminController::class,'register'])->name('register');
Route::post('save',[AdminController::class,'store'])->name('save');

// Route::get('user',[UserController::class,'index']);
// Route::resource('user', UserController::class);

// Route::get('/deposit',[PaymentController::class,'deposit']);
// Route::get('/create',[PaymentController::class,'create']);