<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/* Controller */
use App\Http\Controllers\UserController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// User
Route::middleware('auth:user')->get('/user',
    function (Request $request) {
        return $request->user();
});

Route::post('user/login', [UserController::class, 'login']);

// Admin
Route::middleware('auth:admin')->get('/admin',
    function (Request $request) {
        return $request->user();
});

Route::post('admin/login', [AdminController::class, 'login']);
