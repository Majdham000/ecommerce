<?php

use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResetCodePasswordController;

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/
Route::controller(AuthController::class)->group(function(){
    Route::post('register','register');
    Route::post('login','login');
    Route::post('logout','logout')->middleware('auth:api');
    Route::get('profile','profile')->middleware('auth:api');
});

Route::get('products', [ProductController::class, 'index']);
Route::get('products/{product}', [ProductController::class, 'show']);

Route::post('users/password/email', [ResetCodePasswordController::class , 'userForgetPassword']);
Route::post('users/password/code/check', [ResetCodePasswordController::class , 'userCheckCode']);
Route::post('users/password/reset', [ResetCodePasswordController::class , 'userResetPassword']);
