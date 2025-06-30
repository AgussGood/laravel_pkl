<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;

use App\Http\Controllers\API\ProductController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Auth Route
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
//wajib login
Route::middleware(['auth:sanctum'])->group(function() {
    route::post('logout', [AuthController::class, 'logout']);
    //dibawah ini akan di isi oleh route lainnya
    Route::get('products', [ProductController::class, 'index']);
    Route::get('products/{id}', [ProductController::class, 'show']);
});
