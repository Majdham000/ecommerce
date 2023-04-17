<?php

<<<<<<< HEAD
use App\Http\Controllers\CartController;
=======
use App\Http\Controllers\AuthController;
>>>>>>> 9c6c85518e707c064e4232a952ac9a024ac11b5f
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/
Route::controller(AuthController::class)->group(function(){
    Route::post('register','register');
    Route::post('login','login');
    Route::post('logout','logout')->middleware('auth:api');
    Route::get('profile','profile')->middleware('auth:api');
});

<<<<<<< HEAD
Route::get('/cart', [CartController::class, 'index']);
Route::post('/cart', [CartController::class, 'store']);
Route::delete('/cart', [CartController::class, 'destroy']);
=======

>>>>>>> 9c6c85518e707c064e4232a952ac9a024ac11b5f
