<?php

use App\Http\Controllers\api\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/', function () {
    return response()->json(['message' => 'Welcome to the API']);
});

Route::post('/login', [AuthController::class, 'login'])->name('v1.login');
Route::post('/register', [AuthController::class, 'register'])->name('v1.register');




Route::middleware('auth:sanctum')->group(function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('v1.logout');
    
});